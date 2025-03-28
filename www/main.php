<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do !t</title>
    <link rel="stylesheet" href="style_main.css">
</head>

<body>
    <div class="header">
        <button class="profile-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
            </svg>
        </button>
    </div>
    <div class="info-tab" id="infoTab">
        <div class="info-content">
            <button class="exit-button" onclick="window.location.href='sair.php'">Sair</button>
        </div>
    </div>

    <div class="container">

        <div class="content">

            <div class="check-list">
                <input class="input-new-task" id="input-new-task" type="text" placeholder="Adicione sua tarefa">
                <button class="confirm" onclick="newTask()" title="Clique aqui para adicionar sua tarefa">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                    </svg>
                </button>
            </div>

            <h2>Suas tarefas</h2>

            <div class="content--body">
                <ol id="to-do-list"></ol>
            </div>
        </div>
    </div>
    <script src="script_main.js"></script>

</body>
<script src="script_main.js"></script>

</html>