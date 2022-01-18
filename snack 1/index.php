<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php 
$risultatiPrimaGiornata = [
    [
        "squadraCasa" => "Trieste",
        "punteggioSquadraCasa" => 83,
        "squadraTrasferta" => "Reggiana",
        "punteggioSquadraTrasferta" => 85
    ],
    [
        "squadraCasa" => "Brescia",
        "punteggioSquadraCasa" => 88,
        "squadraTrasferta" => "Brindisi",
        "punteggioSquadraTrasferta" => 67
    ],
    [
        "squadraCasa" => "Basket Napoli",
        "punteggioSquadraCasa" => 86,
        "squadraTrasferta" => "Fortitudo Bologna",
        "punteggioSquadraTrasferta" => 89
    ],
    [
        "squadraCasa" => "Pesaro",
        "punteggioSquadraCasa" => 85,
        "squadraTrasferta" => "Olimpia Milano",
        "punteggioSquadraTrasferta" => 82
    ],
    [
        "squadraCasa" => "Sassari",
        "punteggioSquadraCasa" => 88,
        "squadraTrasferta" => "Trento",
        "punteggioSquadraTrasferta" => 80
    ],
    [
        "squadraCasa" => "Varese",
        "punteggioSquadraCasa" => 76,
        "squadraTrasferta" => "Venezia",
        "punteggioSquadraTrasferta" => 68
    ],
    [
        "squadraCasa" => "Virtus Bologna",
        "punteggioSquadraCasa" => 97,
        "squadraTrasferta" => "Treviso",
        "punteggioSquadraTrasferta" => 92
    ]
];
for ($i = 0; $i < count($risultatiPrimaGiornata); $i++) {
    echo $risultatiPrimaGiornata[$i]["squadraCasa"]." - ".$risultatiPrimaGiornata[$i]["squadraTrasferta"]." | ".$risultatiPrimaGiornata[$i]["punteggioSquadraCasa"]."-".$risultatiPrimaGiornata[$i]["punteggioSquadraTrasferta"]."<br>";
}
?>