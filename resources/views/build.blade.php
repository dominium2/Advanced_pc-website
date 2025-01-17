<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pre-build</title>
        <link rel="stylesheet" href="css/pre_build.css">
    </head>
    <body>
        @extends('layouts.user-layout')
        @section('title', 'Pre-build')
        @section('content')

        <div class="pre_build_select">
            <div class="pre_build_genre">
                <ul>
                    <li>
                        FPS
                        <div class="game-list-sidebar">
                            <ul>
                                <li data-image-url="images/Call-of-duty.jpg">CALL OF DUTY</li>
                                <li data-image-url="images/Apex-legends.jpg">APEX LEGENDS</li>
                                <li data-image-url="images/Destiny.jpg">DESTINY</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        RPG
                        <div class="game-list-sidebar">
                            <ul>
                                <li data-image-url="images/elden_ring.webp">ELDEN RING</li>
                                <li data-image-url="images/warframe.png">Warframe</li>
                                <li data-image-url="images/TW3_Wild_Hunt.png">Witcher</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        SPORT
                        <div class="game-list-sidebar">
                            <ul>
                                <li data-image-url="images/fifa-24.webp">FC 24</li>
                                <li data-image-url="images/nba-2k.webp">NBA 2K</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="game-image-display">

            </div>
        </div>

        <div class="Pc-list">
            <div class="call-of-duty-performance">
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4080 TI</li>
                            <li>INTEL i7 14700K</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1100 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>200 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7900 XT</li>
                            <li>AMD RYZEN 7 7800X3D</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1000 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4060 TI</li>
                            <li>INTEL i5 14600K</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>750 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>130 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7700 XT</li>
                            <li>AMD Ryzen 5 7600X</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>700 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 3060 TI</li>
                            <li>INTEL i5 12600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>600 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>100 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 6600 XT</li>
                            <li>AMD RYZEN 5 5600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>500 €</h2>
                    </div>
                </div>
            </div>
            <div class="apex-legends-performance">
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4080 TI</li>
                            <li>INTEL i7 14700K</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1100 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>165 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7900 XT</li>
                            <li>AMD RYZEN 7 7800X3D</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1000 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4060 TI</li>
                            <li>INTEL i5 14600K</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>750 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>110 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7700 XT</li>
                            <li>AMD Ryzen 5 7600X</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>700 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 3060 TI</li>
                            <li>INTEL i5 12600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>600 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>85 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 6600 XT</li>
                            <li>AMD RYZEN 5 5600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>500 €</h2>
                    </div>
                </div>
            </div>
            <div class="destiny-performance">
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4080 TI</li>
                            <li>INTEL i7 14700K</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1100 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>150 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7900 XT</li>
                            <li>AMD RYZEN 7 7800X3D</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1000 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4060 TI</li>
                            <li>INTEL i5 14600K</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>750 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>100 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7700 XT</li>
                            <li>AMD Ryzen 5 7600X</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>700 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 3060 TI</li>
                            <li>INTEL i5 12600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>600 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>80 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 6600 XT</li>
                            <li>AMD RYZEN 5 5600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>500 €</h2>
                    </div>
                </div>
            </div>
            <div class="elden-ring-performance">
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4080 TI</li>
                            <li>INTEL i7 14700K</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1100 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>200 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7900 XT</li>
                            <li>AMD RYZEN 7 7800X3D</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1000 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4060 TI</li>
                            <li>INTEL i5 14600K</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>750 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>130 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7700 XT</li>
                            <li>AMD Ryzen 5 7600X</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>700 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 3060 TI</li>
                            <li>INTEL i5 12600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>600 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>100 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 6600 XT</li>
                            <li>AMD RYZEN 5 5600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>500 €</h2>
                    </div>
                </div>
            </div>
            <div class="warframe-performance">
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4080 TI</li>
                            <li>INTEL i7 14700K</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1100 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>200 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7900 XT</li>
                            <li>AMD RYZEN 7 7800X3D</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1000 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4060 TI</li>
                            <li>INTEL i5 14600K</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>750 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>130 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7700 XT</li>
                            <li>AMD Ryzen 5 7600X</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>700 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 3060 TI</li>
                            <li>INTEL i5 12600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>600 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>100 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 6600 XT</li>
                            <li>AMD RYZEN 5 5600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>500 €</h2>
                    </div>
                </div>
            </div>
            <div class="witcher-performance">
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4080 TI</li>
                            <li>INTEL i7 14700K</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1100 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>168 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7900 XT</li>
                            <li>AMD RYZEN 7 7800X3D</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1000 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4060 TI</li>
                            <li>INTEL i5 14600K</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>750 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>132 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7700 XT</li>
                            <li>AMD Ryzen 5 7600X</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>700 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 3060 TI</li>
                            <li>INTEL i5 12600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>600 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>110 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 6600 XT</li>
                            <li>AMD RYZEN 5 5600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>500 €</h2>
                    </div>
                </div>
            </div>
            <div class="fc-24-performance">
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4080 TI</li>
                            <li>INTEL i7 14700K</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1100 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>190 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7900 XT</li>
                            <li>AMD RYZEN 7 7800X3D</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1000 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4060 TI</li>
                            <li>INTEL i5 14600K</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>750 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>135 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7700 XT</li>
                            <li>AMD Ryzen 5 7600X</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>700 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 3060 TI</li>
                            <li>INTEL i5 12600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>600 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>103 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 6600 XT</li>
                            <li>AMD RYZEN 5 5600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>500 €</h2>
                    </div>
                </div>
            </div>
            <div class="nba-2k-performance">
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4080 TI</li>
                            <li>INTEL i7 14700K</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1100 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>200 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7900 XT</li>
                            <li>AMD RYZEN 7 7800X3D</li>
                            <li>32GB DDR5</li>
                            <li>2TB NVMe SSD</li>
                        </ul>
                        <h2>1000 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 4060 TI</li>
                            <li>INTEL i5 14600K</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>750 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>130 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 7700 XT</li>
                            <li>AMD Ryzen 5 7600X</li>
                            <li>16GB DDR5</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>700 €</h2>
                    </div>
                </div>
                <div class="Pc-option">
                    <div class="team-green">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RTX 3060 TI</li>
                            <li>INTEL i5 12600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>600 €</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="avg-fps-amount">
                        <h2>100 FPS</h2>
                    </div>
                    <img id="line" src="images/line-solid-svgrepo-com.svg" alt="line">
                    <div class="team-red">
                        <img src="images/CS_NZXTH6RGB_400.webp" alt="NZXT H510 Elite">
                        <ul>
                            <li>RX 6600 XT</li>
                            <li>AMD RYZEN 5 5600</li>
                            <li>16GB DDR4</li>
                            <li>1TB NVMe SSD</li>
                        </ul>
                        <h2>500 €</h2>
                    </div>
                </div>
            </div>

        </div>



        @endsection
    </body>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const games = document.querySelectorAll('.game-list-sidebar li');

            games.forEach(game => {
                game.addEventListener('click', function() {
                    // Remove 'selected-game' class from all games and 'stay-visible' from all sidebars
                    games.forEach(g => {
                        g.classList.remove('selected-game');
                        g.closest('.game-list-sidebar').classList.remove('stay-visible');
                    });

                    // Add 'selected-game' class to the clicked game
                    this.classList.add('selected-game');

                    // Add 'stay-visible' class to the sidebar of the clicked game
                    this.closest('.game-list-sidebar').classList.add('stay-visible');

                    //Display the performance of the game


                    // Display the game's image and performance
                    const imageUrl = this.getAttribute('data-image-url');
                    const gameName = this.innerText;
                    const imageDisplayArea = document.querySelector('.game-image-display');
                    if (imageDisplayArea) {
                        imageDisplayArea.innerHTML = `<h2>${gameName}</h2><img src="${imageUrl}" alt="Game Image">`;
                    }

                    // Display the performance of the game
                    displayPerformance();

                    // Change the background color of the game_image_display div
                    const preBuildSelect = document.querySelector('.game-image-display');
                    if (preBuildSelect) {
                        preBuildSelect.style.backgroundColor = 'rgba(0, 0, 120, 255)';
                    }

                    //display the performance of the game
                    function displayPerformance() {
                        const callOfDutyPerformance = document.querySelector('.call-of-duty-performance');
                        const apexLegendsPerformance = document.querySelector('.apex-legends-performance');
                        const destinyPerformance = document.querySelector('.destiny-performance');
                        const eldenRingPerformance = document.querySelector('.elden-ring-performance');
                        const warframePerformance = document.querySelector('.warframe-performance');
                        const witcherPerformance = document.querySelector('.witcher-performance');
                        const FC24Performance = document.querySelector('.fc-24-performance');
                        const NBA2KPerformance = document.querySelector('.nba-2k-performance');
                        if (gameName === 'CALL OF DUTY') {
                            callOfDutyPerformance.style.display = 'flex';
                            apexLegendsPerformance.style.display = 'none';
                            destinyPerformance.style.display = 'none';
                            eldenRingPerformance.style.display = 'none';
                            warframePerformance.style.display = 'none';
                            witcherPerformance.style.display = 'none';
                            FC24Performance.style.display = 'none';
                            NBA2KPerformance.style.display = 'none';
                        }
                        else if (gameName === 'APEX LEGENDS') {
                            callOfDutyPerformance.style.display = 'none';
                            apexLegendsPerformance.style.display = 'flex';
                            destinyPerformance.style.display = 'none';
                            eldenRingPerformance.style.display = 'none';
                            warframePerformance.style.display = 'none';
                            witcherPerformance.style.display = 'none';
                            FC24Performance.style.display = 'none';
                            NBA2KPerformance.style.display = 'none';
                        }
                        else if (gameName === 'DESTINY') {
                            callOfDutyPerformance.style.display = 'none';
                            apexLegendsPerformance.style.display = 'none';
                            destinyPerformance.style.display = 'flex';
                            eldenRingPerformance.style.display = 'none';
                            warframePerformance.style.display = 'none';
                            witcherPerformance.style.display = 'none';
                            FC24Performance.style.display = 'none';
                            NBA2KPerformance.style.display = 'none';
                        }
                        else if (gameName === 'ELDEN RING') {
                            callOfDutyPerformance.style.display = 'none';
                            apexLegendsPerformance.style.display = 'none';
                            destinyPerformance.style.display = 'none';
                            eldenRingPerformance.style.display = 'flex';
                            warframePerformance.style.display = 'none';
                            witcherPerformance.style.display = 'none';
                            FC24Performance.style.display = 'none';
                            NBA2KPerformance.style.display = 'none';
                        }
                        else if (gameName === 'Warframe') {
                            callOfDutyPerformance.style.display = 'none';
                            apexLegendsPerformance.style.display = 'none';
                            destinyPerformance.style.display = 'none';
                            eldenRingPerformance.style.display = 'none';
                            warframePerformance.style.display = 'flex';
                            witcherPerformance.style.display = 'none';
                            FC24Performance.style.display = 'none';
                            NBA2KPerformance.style.display = 'none';
                        }
                        else if (gameName === 'Witcher') {
                            callOfDutyPerformance.style.display = 'none';
                            apexLegendsPerformance.style.display = 'none';
                            destinyPerformance.style.display = 'none';
                            eldenRingPerformance.style.display = 'none';
                            warframePerformance.style.display = 'none';
                            witcherPerformance.style.display = 'flex';
                            FC24Performance.style.display = 'none';
                            NBA2KPerformance.style.display = 'none';
                        }
                        else if (gameName === 'FC 24') {
                            callOfDutyPerformance.style.display = 'none';
                            apexLegendsPerformance.style.display = 'none';
                            destinyPerformance.style.display = 'none';
                            eldenRingPerformance.style.display = 'none';
                            warframePerformance.style.display = 'none';
                            witcherPerformance.style.display = 'none';
                            FC24Performance.style.display = 'flex';
                            NBA2KPerformance.style.display = 'none';
                        }
                        else if (gameName === 'NBA 2K') {
                            callOfDutyPerformance.style.display = 'none';
                            apexLegendsPerformance.style.display = 'none';
                            destinyPerformance.style.display = 'none';
                            eldenRingPerformance.style.display = 'none';
                            warframePerformance.style.display = 'none';
                            witcherPerformance.style.display = 'none';
                            FC24Performance.style.display = 'none';
                            NBA2KPerformance.style.display = 'flex';
                        }
                    }
                });
            });
        });
    </script>
</html>
