<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 20px;
            width: 100%;
            box-sizing: border-box;
        }

        header {
            overflow: hidden;
            margin-bottom: 30px;
        }

        .title {
            /* float: left; */
            width: 70%;
        }

        .logo {
            /* float: right; */
            width: 30%;
            text-align: right;
        }

        .logo img {
            width: 100px;
        }

        .title h1, h2 {
            margin: 0;
            font-size: 12pt;
        }

        .title p {
            margin: 0;
            font-size: 10pt;
            color: #666;
        }

        .contact-info {
            margin: 10px 0;
        }

        .details-table table,
        .price-estimation table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }

        .details-table th,
        .price-estimation th,
        .details-table td,
        .price-estimation td {
            border: 1px solid #ccc;
            padding: 6px;
            text-align: left;
            font-size: 8pt;
        }

        .details-table th,
        .price-estimation th {
            text-align: center;
            font-size: 10pt;
        }

        footer {
            overflow: hidden;
            margin-top: 20px;
            padding-top: 12px;
            border-top: 1px solid #ccc;
        }

        footer p {
            margin: 0;
            font-size: 10pt;
            /* float: left; */
        }

    </style>
</head>
<body>
    <div class="container">
        <header>
            <table width="100%">
                <tr>
                    <td style="width: 70%;">
                        <div class="title">
                            <h1>LAUTOPRIX</h1>
                            <p>L'Évaluation de Véhicule, Simplifiée et Fiable.</p>
                        </div>
                    </td>
                    <td style="width: 30%; text-align: right;">
                        <div class="logo">
                            <img src="assets/images/lautoprix-logo.png" alt="Lautoprix Logo">
                        </div>
                    </td>
                </tr>
            </table>
        </header>

        <section class="contact-info">
            <p>[Street Address]</p>
            <p>[City, ST ZIP Code]</p>
            <p>Téléphone: 0651530277</p>
        </section>

        <section class="details-table">
            <table>
                <thead>
                    <tr>
                        <th>CATEGORIE</th>
                        <th>DETAILS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Localisation</td>
                        <td>{{ $location ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Marque</td>
                        <td>{{ $marque ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Modèle</td>
                        <td>{{ $modele ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Année</td>
                        <td>{{ $annee_modele ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Carburant</td>
                        <td>{{ $carburant ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Boîte de Vitesses</td>
                        <td>{{ $boite_vitesse ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Kilométrage</td>
                        <td>{{ $kilometrage ?? 'N/A' }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="price-estimation">
            <h3>Estimation du prix</h3>
            <table>
                <thead>
                    <tr>
                        <th>CATEGORIE</th>
                        <th>DETAILS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Prix Minimum</td>
                        <td>{{ $priceStatistics['minPrice'] ?? 'N/A' }} €</td>
                    </tr>
                    <tr>
                        <td>Prix moyen</td>
                        <td>{{ $priceStatistics['avgPrice'] ?? 'N/A' }} €</td>
                    </tr>
                    <tr>
                        <td>Prix maximum</td>
                        <td>{{ $priceStatistics['maxPrice'] ?? 'N/A' }} €</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <footer>
            <p>Signature</p>
            <!-- <p>Tampon</p> -->
        </footer>
    </div>
</body>
</html>
