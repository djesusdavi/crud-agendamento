<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agendamento</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    
  </head>
  <body>
    <header>
        <nav>
            <a class="logo text-white text-decoration-none" href="index.php">Barbearia</a>
            <div class="mobile-menu"> <!-- menu responsivo -->
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list text-white"> <!-- links navbar -->
                <li><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                <li><a href="?page=novo" class="text-white text-decoration-none">Agendar Horário</a></li>
                <li><a href="index.php?page=listar" class="text-white text-decoration-none">Horários agendados</a></li>
                <li><a href="" class="text-white text-decoration-none">Contatos</a></li>
                <li><a href="logout.php" class="text-white text-decoration-none">Sair</a></li>

            </ul>
        </nav>
    </header>

    <main>

   
    

        <div class="container"> 
            <div class="row"> <!--css -->
                <div class="col text-white mt-5"><!--margin top 5 --> 
                    <? #direcionamentos
            include("conexao.php");
            switch(@$_REQUEST["page"]){
                case "novo":
                    include("agendar_horario.php");
                    break;
                    case "listar":
            
                        include("horarios_agendados.php");
                        break;
                    case "listar":
                        include("horarios_agendados.php");
                        break;
                        case "salvar":
                            include("salvar_agendamento.php");
                        break;
                        case "editar":
                            include("editar_agendamento.php");
                            break;
                        default:
                        print "<h1>Bem vindos!</h1>"; #front php
                        print "<h3>A barbearia para cuidar da sua aparencia, e renovar sua autoestima!</h3>";
                        print "<p class='mt-3' style='color:#b5b5c9;'>Cortes modernos, atendimento premium e preço justo.</p>";

                        print '<a href="?page=novo" class="btn btn-lg mt-4" style="background:#5c7cfa; border:none; color:white;">Agendar Agora</a>';
                        print "<p style='color:#888;'>Transforme seu visual. Agende agora e se sinta renovado.</p>";




                        


            }

                    ?>
                </div>
            </div>
        </div>

     </main>
                                            <!-- CABEÇALHO -->
     <footer class="mt-5 py-4" style="background:#1e1e27; border-top:1px solid #2d2d36;">
    <div class="container text-center text-white">
        <h4 class="fw-bold mb-3">Barbearia</h4>
        <p style="color:#b5b5c9;">Cuidando do seu estilo com excelência.</p>

        <div class="mt-3">
            <a href="index.php" class="text-decoration-none mx-2" style="color:#8d8da7;">Home</a>
            <a href="?page=novo" class="text-decoration-none mx-2" style="color:#8d8da7;">Agendar</a>
            <a href="?page=listar" class="text-decoration-none mx-2" style="color:#8d8da7;">Horários</a>
            <a href="#" class="text-decoration-none mx-2" style="color:#8d8da7;">Contato</a>
        </div>

        <div class="mt-3" style="color:#6c6c7d;">
            <small>© <?php echo date("Y"); ?> Barbearia — Todos os direitos reservados.</small>
        </div>
    </div>
</footer>


     <script src="assets/js/mobile-navbar.js"></script>
     <script src="assets/js/bootstrap.bundle.min.js"></script>
     <script src="assets/js/form-validation.js"></script>

        </body>
        </html>