@extends('layout.user.master')
@section('content')
    <style>
        .alinear {
            text-align: center;
        }

        .title {
            text-align: center;
            font-size: 48px;
            font-weight: bold;
            color: rgb(22, 78, 161);
            padding: 30px, 0px, 3
        }

        tbody .team-logo-cell {
            text-align: left;
            vertical-align: middle;
        }

        tbody .team-logo {
            float: left;
            display: inline-block;
            vertical-align: middle;
            width: 50px;
        }

        .table-navar {
            text-align: center;
        }
    </style>

    <div class="container">
        <div class="container">
            <h1 class="title">Tabla de Posiciones</h1>
        </div>
        <table class="table table-striped table-responsive">
            <thead>
                <tr class="table-navar">
                    <th>Posición</th>
                    <th>Equipo</th>
                    <th>Juegos Jugados</th>
                    <th>Ganados</th>
                    <th>Empatados</th>
                    <th>Perdidos</th>
                    <th>Porcentaje de Victorias</th>
                </tr>
            </thead>
            <tbody class="alinear">
                <tr>
                    <td>1</td>
                    <td>
                        <img src="https://seeklogo.com/images/B/basketball-logo-15048F5611-seeklogo.com.png"
                            alt="Logo de Panteras Altotonga" class="team-logo">
                        Panteras Altotonga
                    </td>
                    <td>12</td>
                    <td>9</td>
                    <td>1</td>
                    <td>2</td>
                    <td>75%</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <img src="https://seeklogo.com/images/B/basketball-logo-15048F5611-seeklogo.com.png"
                            alt="Logo del Colegio Cervantes" class="team-logo">
                        Colegio Cervantes
                    </td>
                    <td>11</td>
                    <td>8</td>
                    <td>2</td>
                    <td>1</td>
                    <td>72.7%</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        <img src="https://seeklogo.com/images/B/basketball-logo-15048F5611-seeklogo.com.png"
                            alt="Logo de Soles Tab" class="team-logo">
                        Soles Tab
                    </td>
                    <td>10</td>
                    <td>7</td>
                    <td>2</td>
                    <td>1</td>
                    <td>70%</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        <img src="https://seeklogo.com/images/B/basketball-logo-15048F5611-seeklogo.com.png"
                            alt="Logo de Águilas Cuautepec" class="team-logo">
                        Águilas Cuautepec
                    </td>
                    <td>12</td>
                    <td>7</td>
                    <td>1</td>
                    <td>4</td>
                    <td>58.3%</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        <img src="https://seeklogo.com/images/B/basketball-logo-15048F5611-seeklogo.com.png"
                            alt="Logo de Liebres Jal" class="team-logo">
                        Liebres Jal
                    </td>
                    <td>11</td>
                    <td>6</td>
                    <td>3</td>
                    <td>2</td>
                    <td>63.6%</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>
                        <img src="https://seeklogo.com/images/B/basketball-logo-15048F5611-seeklogo.com.png"
                            alt="Logo de Panteras Pue" class="team-logo">
                        Panteras Pue
                    </td>
                    <td>12</td>
                    <td>6</td>
                    <td>2</td>
                    <td>4</td>
                    <td>50%</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>
                        <img src="https://seeklogo.com/images/B/basketball-logo-15048F5611-seeklogo.com.png"
                            alt="Logo de Garra de Jaguar" class="team-logo">
                        Garra de Jaguar
                    </td>
                    <td>10</td>
                    <td>5</td>
                    <td>2</td>
                    <td>3</td>
                    <td>60%</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>
                        <img src="https://seeklogo.com/images/B/basketball-logo-15048F5611-seeklogo.com.png"
                            alt="Logo de Academia Nova" class="team-logo">
                        Academia Nova
                    </td>
                    <td>11</td>
                    <td>4</td>
                    <td>4</td>
                    <td>3</td>
                    <td>45.5%</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>
                        <img src="https://seeklogo.com/images/B/basketball-logo-15048F5611-seeklogo.com.png"
                            alt="Logo de Pozaleros Suchiapa" class="team-logo">
                        Pozaleros Suchiapa
                    </td>
                    <td>12</td>
                    <td>3</td>
                    <td>2</td>
                    <td>7</td>
                    <td>30%</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>
                        <img src="https://seeklogo.com/images/B/basketball-logo-15048F5611-seeklogo.com.png"
                            alt="Logo de Club Mérida" class="team-logo">
                        Club Mérida
                    </td>
                    <td>11</td>
                    <td>1</td>
                    <td>3</td>
                    <td>7</td>
                    <td>9.1%</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
