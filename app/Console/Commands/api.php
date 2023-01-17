<?php

namespace App\Console\Commands;

use App\Models\Brand;
use App\Models\CarModel;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class api extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api {status}';

    protected $message = "
##  ##  #######   ##  ##   ######   #####    ####    #######
##  ##   ##  ##   ##  ##     ##    ##   ##    ##      ##  ##
##  ##   ##       ##  ##     ##    ##         ##      ##
##  ##   ####     ######     ##    ##         ##      ####
##  ##   ##       ##  ##     ##    ##         ##      ##
 ####    ##  ##   ##  ##     ##    ##   ##    ## ##   ##  ##
  ##    #######   ##  ##   ######   #####    ######  #######
\n
  ##     ######   ######
 ####    ##  ##     ##
##  ##   ##  ##     ##
######   ##  ##     ##
##  ##   #####      ##
##  ##   ##         ##
##  ##   ##       ######
\n
Serviço inicializado pelo endereço: http://localhost:8010/
\n
Para cancelar, precione Ctrl+C
";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Inicia ou para o sevidor da API';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if($this->argument('status') == "start"){

            $this->newLine();
            $this->info("Segue Configurações do banco de dados");
            $this->table(
                ['DB_CONNECTION', 'DB_HOST', 'DB_PORT', 'DB_DATABASE', 'DB_USERNAME', 'DB_PASSWORD'],
                [[env('DB_CONNECTION'), env('DB_HOST'), env('DB_PORT'), env('DB_DATABASE'), env('DB_USERNAME'),  env('DB_PASSWORD')]]
            );

            if ($this->confirm('Estas configurações estão de acordo com seu banco de dados?', true)) {
                $this->info("[ INFO ] Inicializando API");

                $this->info("[ INFO ] Verificando tabelas no banco de dados");


                $hasBrandsTable   = Schema::hasTable('brands');
                $hasCarModelTable = Schema::hasTable('car_models');
                $hasUserTable     = Schema::hasTable('users');

                if($hasBrandsTable && $hasCarModelTable && $hasUserTable){
                    $this->info("[ INFO ] OK!");
                    $this->checkContentOfAllTables();
                    $this->startServe();

                } else {

                    $this->warn("Não existe tabelas criadas no banco de dados.\n\nTentando criar tabelas...");
                    $this->newLine();

                    try {

                        $this->createTables();
                        $this->info("[ INFO ] OK!");
                        $this->newLine();
                        $this->warn("Tentando povoar tabelas...");
                        $this->newLine();
                        $this->seedTables();
                        $this->info("[ INFO ] OK!");
                        $this->newLine();

                        $this->startServe();

                    } catch (\Throwable $th) {
                        Log::error("erro ao tentar criar ou povoar tabelas no banco de dados =>\n".$th);
                        $this->error("ocorreu um erro ao tentar criar ou povoar tabelas no banco de dados\npor favor verifique no arquivo .ENV se as credenciais do banco estão corretas\n\n consulte o log para mais inform[ INFO ] ações sobre o erro!");
                    }
                }

            } else {
                $this->newLine();
                $this->info("Altere as informações no arquivo .ENV caso seja necessário");
                return;
            }

        }
        $this->newLine();
        $this->error(" Erro: Comando inválido ");
        $this->newLine();

    }

    /**
     * roda todas migrates para criar tabelas no banco de dados
     */
    private function createTables(){
        Artisan::call("migrate:refresh");
    }

    /**
     * povoa as tabelas do banco de dados
     */
    private function seedTables(){
        try {
            $this->createTables();
            Artisan::call("db:seed",[
                "--force" => true
            ]);
        } catch (\Throwable $th) {
            Log::error("Erro ao povoar banco\n" . $th);
            $this->error("Erro: Não foi possível povoar a tabela, mais informações no arquiivo de Logs");
        }
    }

    /**
     * inicializa o serve
     */
    private function startServe(){
        // $this->info("[ INFO ] Iniciando serve...");
        $this->newLine();
        $this->info($this->message);
        $exitCode = Artisan::call('serve', [
            '--port'=> 8010,
        ]);
        $this->info($exitCode);

        $this->info("[ INFO ] Inicializado com sucesso!, para cancelar. precione CTRL+C para cancelar");
        $this->newLine();
        Artisan::output();
    }

    private function checkContentOfAllTables(){

        $isUserTableEmpty = ! User::exists();
        $isBrandTableEmpty = ! Brand::exists();
        $isCarModelTableEmpty = ! CarModel::exists();

        if($isUserTableEmpty || $isBrandTableEmpty || $isCarModelTableEmpty ){
            $this->warn("[ ATENÇÃO ] Não há dados nas tabelas no banco, Tentando povoar...");
            $this->newLine();
            try {
                $this->seedTables();
                $this->info("[ SUCESSO ] Banco povoado com sucesso!");
            } catch (\Throwable $th) {
                $this->error("[ ERRO ] Ocorreu uma falha a tentar povoar o banco, para mais inform[ INFO ] ações verifique o LOG do sistema");
            }

        }
    }
}
