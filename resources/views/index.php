<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content=<?php $token = csrf_token();
                                    echo $token; ?>>
    <title>Szakdolgozat2022</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="./css/kezdooldal.css">

    <!-- Scripts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../js/Ajax.js"></script>
    <script src="../js/Szakdoga.js"></script>
    <script src="../js/script.js"></script>
</head>

<body>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="szakdolgozatoklistazasa">
                        Admin oldal
                        <table class="table table-striped">
                            <thead class="fejlec">
                                <th class="szakdogacimefejlec">Szakdolgozat címe</th>
                                <th class="tagokfejlec">Készítők neve</th>
                                <th class="githublinkfejlec">GitHub link</th>
                                <th class="oldallinkfejlec">Szakdolgozat elérhetősége</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody class="szuloelem">
                                <tr class="sablon">
                                    <td class="szakdoga_nev"></td>
                                    <td class="tagokneve"></td>
                                    <td class="oldallink"></td>
                                    <td class="githublink"></td>
                                    <td><button id='szerk'>Szerkesztés</button></td>
                                    <td><button id='torles'>Törlés</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ujadat">
                        <form class="sablonAdatok">
                            <div style="display:none"><input type="text" id="id"></div>
                            <div class="sor"><label for="szakdoga_nev">Szakdolgozat címe</label><input type="text" id="szakdoga_nev"></div>
                            <div class="sor"><label for="tagokneve">Készítők neve</label><input type="text" id="tagokneve"></div>
                            <div class="sor"><label for="oldallink">Az oldal elérhetősége </label><input type="text" id="oldallink"></div>
                            <div class="sor"><label for="githublink"> GitHub elérhetőség</label><input type="text" id="githublink"></div>
                            <div class="gomb"><button id="uj">Új</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>