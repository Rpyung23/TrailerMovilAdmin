<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Trailer Movil Events</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="./plugins/sweetalert/css/sweetalert.css" rel="stylesheet">

        <!-- Custom Stylesheet -->
        <link href="./plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="./plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">

    <!-- Date picker plugins css -->
    <link href="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>


<body>


   <?php
     include 'templates/preloader.php'
    ?>


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="show menu-toggle">

    <?php
        include 'templates/nav-header.php'
        ?>


        <?php
        include 'templates/header.php'
        ?>


        <?php
        include 'templates/sk-sidebar.php'
        ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <!-- row -->

            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">

                        <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10 float-right" data-toggle="modal" 
                        data-target="#modalInsert" type="button"><i class="fa fa-plus m-r-5"></i> Agregar Evento</button>

                        <br><br><br>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-xs mb-0 zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Nombre</th>
                                                <th>Ubicación</th>
                                                <th>Estado</th>
                                                <th>Precio</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody_menu">
                                            <!--<tr>
                                                <td class="td-codigo"><strong>1001</strong></td>
                                                <td><img src="https://d1uz88p17r663j.cloudfront.net/resized/15696b61f2de4f3b4fb6a5516ffcd6ab_COSTILLAS_BBQ_1200_600.jpg" class="img-table rounded-circle mr-2" alt="">Costillitas BBQ</td>
                                                <td>10/10/2021</td>
                                                <td>
                                                    <i class="fa fa-circle-o text-danger  mr-2"></i> <span class="badge badge-danger badge-sm m-t-5">Inactivo</span>
                                                </td>
                                                <td class="td-codigo"><strong>3.50 $</strong> </td>
                                                <td>
                                                    <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button"><i class="fa fa-edit m-r-5"></i> Editar</button>
                                                    <button class="btn btn-danger m-b-30 btn sweet-confirm" type="button"><i class="fa fa-money m-r-5"></i> Eliminar</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="td-codigo"><strong>1080</strong></td>
                                                <td><img src="data:image/jpeg;base64,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"
                                                        class="img-table rounded-circle mr-2" alt="">Six Pack Club Verde</td>
                                                <td>10/10/2021</td>
                                                <td>
                                                    <i class="fa fa-circle-o text-primary  mr-2"></i>
                                                    <span class="badge badge-primary badge-sm m-t-5">Activo</span>
                                                </td>
                                                <td class="td-codigo"><strong>3.50 $</strong> </td>
                                                <td>
                                                    <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button"><i class="fa fa-edit m-r-5"></i> Editar</button>
                                                    <button class="btn btn-danger m-b-30 btn sweet-confirm" type="button"><i class="fa fa-money m-r-5"></i> Eliminar</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="td-codigo"><strong>1001</strong></td>
                                                <td><img src="https://d1uz88p17r663j.cloudfront.net/resized/15696b61f2de4f3b4fb6a5516ffcd6ab_COSTILLAS_BBQ_1200_600.jpg" class="img-table rounded-circle mr-2" alt="">Costillitas BBQ</td>
                                                <td>10/10/2021</td>
                                                <td>
                                                    <i class="fa fa-circle-o text-danger  mr-2"></i> <span class="badge badge-danger badge-sm m-t-5">Inactivo</span>
                                                </td>
                                                <td class="td-codigo"><strong>3.50 $</strong> </td>
                                                <td>
                                                    <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button"><i class="fa fa-edit m-r-5"></i> Editar</button>
                                                    <button class="btn btn-danger m-b-30 btn sweet-confirm" type="button"><i class="fa fa-money m-r-5"></i> Eliminar</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="td-codigo"><strong>9080</strong></td>
                                                <td><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgVFhYZGBgZHB8aGhocHBweGh4eHB0cGhwcHh4eIS4lISErIR4cJjgmKy8xNTU1HiQ7QDs0Py40NTEBDAwMEA8QHxISHjQrJSs0NDQ0NDQ0NDQ0NDQ0NjY0NDY0NjQ0NDQ0NDY0NDQ0NDQ0MTQ0NDQ0NDQ0NDU0NDQ0NP/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAACAwAEBQEGB//EAD0QAAEDAgMFBgQFBAAGAwAAAAEAAhEhMQMSQQRRYXGRBSKBobHwEzLB0QZCUuHxFGJyoiMkgpKywjNE0v/EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EACYRAAICAQMEAgMBAQAAAAAAAAABAhEDITFBBBIyUSJxE0KBoWH/2gAMAwEAAhEDEQA/APCTp79/dcI09F0tUCoQIfSOMoh3ncyo5tacFY2bCcS1wrGnIiAPFAAYbKSU3MCDSqZiS51pJ3ItnwJNPHSN6AE/DMDQEx4XnnEo8V4kua0VMNHhUk+CYHiHMymWunNwiCLqYYguLm3YQ3WHEUd5DqmAL3EhraakxvP8IsEhpjQrjG+9UBlxnRADMURm3npEyqT3blZcozCFzKAKzMI6290TagU9+/qmOxAaAfYIMRmURfedOSABL5FaxaKxFJO/RW2YgDXFw7xEVtcGfBKwQPmNOH8JkZRY7wDqgBIaJzOMzWeHCU92ICykk0hvGbmeGiY97XCPlM2ibbkOK0/l3V3oADKQMzhU6e/BcLIA4ny3+96J7C3K5wPyzGom43zQLoIfIIIGp0PCeqQCWMLjQ93Q31qOfNWDA7o93RBrQJAtQeBrbTTxSXH7ctaIADaHQC061nSoHvxKoPaeJ5zbgrLZ1r7mnD7pRcdUAIYyZ4VUamYrBDTrHpRLDTKBnSVC1dIXEADl4KIs7uHRRABiDXqd0qNvwXGt3WTSKCeMHoPJAjgZQncf261Whsb4yiL90m9DAjmJB8FTcAJmft7qjY7K4GIg250PvggDQw9n1MABxk8ZJE8DBXSwtLWAQbEjWunGKK3jbNneMu9gNafKBPjXqqL8UMa3IQHHfoNY1r7umAk/Nl0BsJ5z1XGtJ48KmF3CDv8AuFSZn3+ysbOwZ4mYv9POEAJZhyQNT7+64cKLiAPcLSxsERLTetxUH7GR7pV2kyAAPA6deSCSniRAIp718h4KYbS6gNN2p57k9mEXG2Y2E2HG6thmRvHjvQBSeWikd7ySMPDJrPD9laa2ZgE8hM33WRZDIEBsXF+iAAwsOZpXdePdUGKwkm9NYpxVxmDDokibGgkb05jnOs3OGnui073Hlu+yAKrNlcBmLZMU4Ljg+IJqaQLTuVxwxIa7EOWXEBhoDE9RCquxC4d0wOIv9v2QANQJJLjrF4INdy7tETlMGDHAQu4LXOcGtnKASSbRFSfe9cxsMySBAsDqTc++SCiu50iagVvY/ZBjYl591uOqPFAjfF+CqvJI4D2UgI1pcD/BEzHkFx7NSuvBABrWhvbRCcZxmRM/ugBJw9UMDVWMKvd/kfsgcxAChNr7lHBdLEbcMi193BAxcngomZRu8/2UQA0gaTBFfXxSyaRFdCrGMQCQLSefugok0HOeiBEa2wieR3p+Fs5oYJpP8pRAkEVt1uei0mYga804HkK/RAHDiEVmBArYd2oPgSPLeqwYJLr2iYoRFkbMMuDgRMdImYnWwsmvYJpaJjdKZILnF1u7vP2+619l2HADWsc8Me6JkipcJHzPaANAdbzoKDGxJ0pTx99Vdd2Y/GyPDj/8eWuG98d58gEPEX4xVZZpdqu6GnXA14wqD4zCBESWTU8MUwQeGlEntTEwMJgLDh4zsxDwXODgN4yPqJos7auw3sMFzXGCWzhvAniHZljOL7PDRkpLRE61oOCxjNvmyJz0elGjjdqudBaxjBFgXmePecUDdre9zRLa7xAHG6zw5FKvul7OXvle57jD2Vju63EAMGGtYfy3gnFAk3jcl4Wxta/58MyQAXNBnN+Yf8aOqxNm7AeWGmz1H5mvkQZockKnj9juYXS3Ac4CWgWr/k0ehWayN/sdn5Ev1NT8Q/CYW5Mry4El4xMbukEgjIMUtAtCy2dovbEZRAigdyk96pVAvzVLWsNiBYxTNzN139lpcvZzTnLudGxgdsEVxGNfApLntI8WuW1g4DMZjSWswyakNGJiTTM0QHgzEUheNaZ0VnZuznYhkNw43vexkkcHA9YUyk63orDN9zvU9c/saGEsfLXNmmA8SJEwfjXE13VXMfsp3w3uD2ZmA5QWEB5DcxEnFJEjeF5zaexHmSMHAyisNxcN0chlCr7Xg/DaGnCgOHdcDrv+kQhTd+RtLJo9Dj9qcRUgC9j913DxwPmE1uNBr3Tc+IVVp4rqrul7OT8slyXiAW0MtBvEObuBHgbE2KS/Bium9FszKnkrmIwQNxGovIstYu0dWOTlG2UC03Bg60Ua46nkfIgpxwsoMG3VKe0QRrce+oKo0CdhgCL8tElzeqssILTqZ6UFPLzScQGvBAA/Fd+nzURfFG4qIGP2kAPeMwdDjBm96+nVVxSqLLET7rHRMe2Q2kCxjU70CFtPCqa0dZUaKWmqPCbJiYoTeNJjyTAJjzprfjMUEaWTXBwuIOo9+C7hNB8NdwqrDgMwGgpPAUHkgkubNs7S0EfMLzbUDnS8c9V6Ls97mMa0NNq0Ji+6115lgmTMRFt1dBWVv7NtAacuegyzU/p3CmoXH1nivs1w7s72ie8zkV4jt3D7zj/cPQr1mM8lrDmzVIBmdBIXmu3B83gfOPquTBpIvOri/owiaK/sGztJbmE5vITRZq2uzavwo1DeoNfMFdeR1GziwQTlqfQ8DaoGXhvr0Wf2ge/4BWcDGdkNJhrj8moawt0/z6LP2x5JBcIMHSLFedHSj02jxe37K7OcrSRJHmljs59S6Ght6gnoFq4zSXwBPf4cDqu4zDD5BEa0I1+67FkaVHLLBGUrZY/DX4bZtOMzDfiPaHh1WZQZaMwFQb1XqNn2HD2dz8JsuaxzmguALjF5IAF5WT+B8WNr2f8AyI6sctX+oDn4hcA4F73VP+T7bogeKjNK4K/ZpjxRjLRcFnbGscx3dbaxaF5f8TbMz+na5rQCDoAPRejx8YCWBsS0G8xIcYryWN24J2U8J9FjBtSKnFOL04PDgURMG5Aw2XRfxXoHjM0ezpJd4DrP2V/F3C8RW19/gqXZrHS7KYqOM0d7orT2AmBUEy4/U7r+a2h4nXh8EVXExQCmkjVKcwm5HgNaJ+JiAzSfdkIIDvdpVmxXw8TKCHUsZm8UA80LsZp3rr2R94UeIn3xqgBWXkom5x+n/wAvsuIALIZM0pNPCPVM/KK6keQPqu4kteM3Q7jXwoQlG9668+HBADcEDW0j6qzhMzW6ndMQOvmqbKqxPX6FMkeGVIGl/Dj9lZDBWNBOgtANkDCPm3X3Rofe5HhlznNhhymxBiZ1p6oAthsiI04ydR6r0+x5stAAJPQUXkcPDxHvykChES+sWFMq9Lsm24ZAmQ6TN4aSTAcdJim+m9cHXW6X2a4XFXboR2iKNoBXReT7bs7kfv8ARei7U21pYCzvAGrphg/6jQ+C8d2rtod+Ym47ohvgTU+SwwQluVkyRqlqZQK1/wAPYp+Kxv5ZJrp3SZBWMDotn8MR8ds/pdHM0C68ukH9HHj0mvs+hYex4WSAz8twXesrP29oGUCYAit/Nbbg4NNREDRYnbeM1mXMQKGBqeQuV5kW5NHpvTVs8xtu1DDfmIPzaR9eSQ/tZjmuHfE8B9Ckdtvl1oqLnva6aLJBXoQxpxtnFkytS+J6j8P9sYeFjYT3Ewx7TRtbZadV6rYtlce8X5QA2mRpgxUyV832Ns4jB/e31C+o7CwBpo4yYp9lz9T8aSNenlKSbZH7K4OcS5rhlgdwA2gVHM9Vl9otnZnDgfQrbxADmMabq24rI2twGzuzEAVusIN9xvLx1PnbawmMKS1yNjoiq9Q8Zo1+yw7K6LlzfLMVac0gFpgEwSNwvFr0qp2VhhuGXuqCA4/Ro5xCU6tYqdPMraCqJ1Y1UULe4AUt780mY52Ruad3vSEvj1vvVGgGLMAzvQvZF+Xjb6JhFDwqo8QBv9n0KAF5Bx8/somfH4t6BRAAYmI55k7h5CFI011XHH3+66xtb1IG8QmAzDMWTQZKBp7szqu4aCS9gOg0qZgAT0+qdgOJMAAbo37uaSxrZETNhx3Gim17QGgtYb3I3G7W8OOvKZmU1FDjFyYXanaVcjDOaA94/NWrW/26E/mqPl+axh9oQ2CxriBALpiBYOaDD40zWXnmd5/Kv0Ctl1OK48nzepzdS2pJRex3tPaHPq9xdFpsOAFh4LExXANk/qotDaGnf1VTa2jLA5ytIJJUViXt2Z7eZWt2I+MSolsQ4WkXuLGgIOhAWKzEnwutfslpBLlU/FhkuKtHtf6prQXjFMumS0TiuBjuvBGVuWIDpPC6we1dvcQcgyUPekueebzXpC47FKobU+aeC54QpmUJzlLUztosD1570lrzuTtsZDWknnH1Vdrl1JG7Whb2HEh7CQSJEjhrHH9l9G2btF7GNEsg5i3EdOV8WZE91+8cKL5vsPzjmvVbNtz2TkeWzfdTWuvG65c8FJozeZ43S2fo9HtnajgC4gYQIu/5zT8jBU8yvMntIw8MBJAJL31eR/aLMHKSlbRiySSSSdSZPUqjs7/nP9p5qceJIcc0sm5k5r+9UzZ25iG77nhqkPfUmImsG9Vo9n4cNLj+a3L+fRdT0RGR9sW2Xf6osLWEwwwY0BgQeXverZPunv2EjZ9gGNitYTAyvc4jc1jT6odhxJYJuB5RTXj5Ksc+DTBJ9qTHP092Cr4tKfXldMe+41mPBJiTBr5axPFanQCwwRr6IXA2mmngo68fsuGwJ5IA5lCi7k4KIAAbzUnTzlNeeKUDzpTwXQL/AHqmA5jJHhKPDQNfuVprG5Rb62QSFivhpyyPsSJ0VF7iaEyrWIDkJ5eoVM2WGTyOTNOUZfFtAZMgcRWk1RbTtGV0RNGmebQ7dxUxD3TyStrb3h/iz/was0tdSIybTctxeJjzvXMV4c2OEHf4H3ZDlXouwPwz8ZhxcRxYwCWhsZncZNhfSqbkorU2xuUnUUeObssOm/otvZXANAkcd63ti/CbMfO1j3Me2ozQ5p4OiCOYnkvMbTsrmPcx4hzTBHu4SUo5FoVmjKPkjQL+irY2KJp+6p5Vo7E3/ltqJEkfBg6iXumDpITUUjOFWZ22M7t66Dz6QVm4FREVmAfot/ICKgVuk/0rCQYrXU7typSRS6iNVQPZ2EBXQUn1K0w5VMNmWgsm/E4eY+yzkrZjKUZPcPEZT30Q7O7KHayNR9ksuJEBJGYHQ76/ROKNISS5M74ebFyCam+4XPktwWtQWHAWVbZtngucYzOpTcKnqfRWinJ2YdTNSlS2NHsbAc7FkOyjKcNx/ND4YcumahMmg3Gyo7Kyhi2aK8AAm4G2uYHtFA4QTrQusb1mwvArEyrZ2gN31mPC3VVDc6sNaa+/4dzcaV8eHBLeNU0v0PvySMW+79XgVudILrVNNP3QvbDokxfquvdNfdEDjdAHY4qKZ+CiAAYNCY5KxkGUEXJ13D2FXbvsic+fBABq6WNy0dqDERFK15qoWzlA9fqnNkEJkjH0Y7WlY4GVSV9zAWOOobbhSoVEHQFYZNzi6nyQGMe6eR9Ee1sq3/Bh6sCB9GnWiudoMrh8cHDP+iz5M4uoszXNoV9R7NYPhuAHdDGgaUAERzC+awva/hLtVrmOwXGHhsMn84Fom7gNOE71nlVo6+jnFSafJo/hoj4ryBUT03Lyv4vwAXB4vncw8RGZvSvVep/DD3fFe0htjpzXk/xPtjXvyMMhrnFxFi40gch5kjRZ4t1R19U0sbs89kV3ZTGz7QN/wvJ7iq+VOaYwsQbyzyLl0vY8uD1/jB3IYjgiA9EsPAqaCCgzQcazVIftLdBm5W8TZLxHl96NGn1P2CPAY0ilYpUW5CwRRagkrZz4ztAPAF3nQLhc/jyhv/6THsMzMClyfEQaVQ52y6XCsDxAiUFJrhFxk5WzflH5jpKIpeCBlaBBEUi1ymbuJUnPLyAeK++Kc0mDa58vqnbOww4xeWyLkRmIG6kEndzScNs1v3nebj9lpjep2dOvkcyQgxaT9f2THggGdd/rRVnv00W52BOnKDpMeiHKandA99ET3y0CwuEBNaG+nmgYMqIc6iABc5EwpZB1RtrdAhzXzVPwyq5imURQTxOqNgTEaGdrsN80flMcaW5+63WeDAV0Q5rpuGu8e6b8VSKwybnF1XkjjqtPL6LQ7RbTBjXAw+tQs/EsVf2493BIv8FnUOeszBeLPT9t7Js2y4mBs78Jpwjhzivyk4hcZGYPHeEGIApEiFQ7U7JwG7BgbS1jg/EOVxzuLRlJGbKdTHmtTt/ZTt2LsuJgyW4rMj3AEhjm1dni0SbxMIO1dmeezdkY2p+I5gA/MS97WxzKp8m71bpaVoZeJ2YG7Czahj4wzu+G7DmWyCQ4yHDu90mDyQYP4Xc978PBxmPOGxrzma9ndcAZFDUSKLW2/CczsdrHCHNxntcNxD3TbjC0Pwu6dr2gkf8A1meIyMQkrHXc0pejw239lYmEGOeAWPE4b2kOY8cHD0MFVyz/AIOKdxZ5ly9b+IsSNh2VjGF2FVwxjTvEuLmZLtIJIqdF5pjP+WxzudheZelIypRnS9FFzeFFTc7O6BYW+p8E7aMTK08aDmUluB3QAa6cUIcFStjGBwMEQBM0EQLGdTvQYcmje622bU8vuiLCYbMgDvHedyY7FaLcoG/kgL9HW4LREiTvNT5qPAEm2qjMUEFxoBPG2qVJMyc1bCBxHMQglJt6l3MCARaBELoFRzQYdmzeBPNMaahSZSVSos4ZGUgUcQLXMhpI4NABJ3yuMeG4bSKuMyd0k++Pgruy4YGG5wBzFpBMgS0NFG7m2zHWWtFyqmFhPexkNNgeVKHhMz/CqK1O3pLt/RUxnGK3p5pLcIuMW1P7rRfspvwuDrwdaoi0mpiVnufkOX0t4fdbqV7HbVHMR1uFEDJHe1KEmVwup5KhDoUUyHj0/dRAFYV1RtRNYmMw0CBaK1t9k1qJuGnjAGk8ZPVMk7hNMHiDoNx1/lVHBaLMOeAg+hWaw0WOVanH1O6ZHN9FZxHS3D/wA/2cqwNFae0lmEQLsn/dwWJh+rCwnw01ifmh8SOLRda/Z/aWI0MGHtTmgZcocczGmoMAhwAbaaUNFj4pZoxzfGa+K78BhMBwALiJNg2JBsDwU07tM9DF1mKONQliTa5Tps28HbcUYTsJ4ZjYeK4vyOJzBxcASCwhzSSRTVP7K7Zfs+I/GxMEvOK34YLXZGta2kNDmmYgC+i80MMgZg6O7moTI72WOcruIcSgJJa0xBgiTWBFinclszSOboZyXcpR+naN3tLt5jtkZsmGx4DTmc9+UEkuc4w1s6uOqyWH/ldo/wA8H1xFWxHzF6bzPRNzxs2MN78Lyz/dVba1PPyOP5mou0rSdVaMnaj8g4k+SnwmlwcCDAqL2ESptPzMm0FEzBAJIBBIOtK+7JgnUV/TmFiDdBPeO62/SiU7DM2kF3+pOa/ku5ZIFQcttJncPdUT6ECYg0NpadJtITGtHoDtL6EDUyQKgeVydEBB+YGXd61o4cRuTxDg6+WIB1NfmrWirF1Axw1odIqSeiEVHajUY6QDvAPUBEhIFIoIEdEX7+ig5X5f02Wf/DOkVnW+X65W78zjYKi7bP8AgtwxDoyn4bSyzQAM95kjMRQ14I8TFHwwyBQmfC5G9xgSdAGgarIxYB7sA+/NUo9x39HKnJjcTbXV7xB3Cw4DcOqpudN0LnoSVvFKKpHW3Y/PSi41yUX0hEDNBzVCHfGXVXzKIA024NkYw4RPNe7AXGuPBAhzMNO2cA33R+6Q0nx99EQLhuCZJZYNNbfRYrDMFamDOYa1G/esvDoBBmf5WOXg5OqWxJ4ytbZQzJs5xCQDhvggT3viPiRBosgU0VrZtuaGNZiYedrJyODyx7Q4kxqCJrUalZGEdmbx2VlwWtgmRL2UAmoJIFZFrhUW7GXEtJwwRbN3c0mmUtAJO9CzthneAfiNzAgjEY14IN+82Ch2PaMhGR2G8ah2utnRCbaKcSY3ZeI12XJUjN3HAyK2mpseiSWuFS57ZId3mugmKGRM0WhhPc0S7AeK/Nh5oiLS2nHrvTcHtBjhHxnDKAGte0G1IkRECxlKk9ie1L/hkuzuEZmOF6Fs+cFJxgRhvaad5n/stvZmNe5zy3DfMFzZyxAggUJ3LJ7QYGjEAGUZmUvFCfFDVIIr5J/ZlbWKN4HyNFGNcXB2bu7uYhOxWZgRvF1UwhmblmIvvjXz9U0XHYYwEtBuWyCN8Xr0KgYXD5gWmtu9TQ6LocA64IdSR+oD6hVcShIk1JpX0TKSbZcDHCzwdwdXzQDBdvEGuXLLZ33noq1BYf6j7rgI5eDh6FFDUX7/AMNc35KD6LjrroPooOb9g9rflBk1dmy8BMFw9Bx5Ko/CqTX6+qbtAzuzuudB8oAsANwsmZxanGZW2NHb0qSi6KGJhx/EJULRdRpApOteNFWdhLQ6iqWprDQgGDc9EYwuiH4RTAryorPwhuPVRAGzl9x+6IHn0/daP9L/AGu/7SPNxQN2T9QjwP0KYFQP59Aiz8/JWjswH6Tzp9SujAZw5d36PPokBVZjQRzCLZttZ8FrHtgtoJzQe8SDHy6gkkzQisp7NlbrA5lNZsza2FOFONlnJWZzx93ItmDg4jnAMYQMTKHMflLgWz3WmkUOt6JG39ksa8MaXtBkS+sZeVxxVo9m4TtK7xT0Ub2a5pa5mK8FtRmhwB5Gyhoxl08uEmZmJ2Q8NL2uY8b2uqNKgqpibA+AXMcBcOy0pxC3X4WMAGlmHiAZa/K8hhmJO+xrqm4naQZQsxcIQQY77a85pKmjJ4mt00eXwHvaZY9zHDVriFfPbOPHfc3FA0xGMf5kT5rTwMZmIWtJwnUYO+Mpp8zQbgCIJiqDE7KZ8PMGvzGBLHBwkUdrrUgQjtJSlwzNPaGG759maDvwnvZ5OzN8kra9qY5hawYhLi0nPEgNBoCL3V3aeyWkwzFBluYB7S0mv2g+KW/sTFD2NgAPeGBwMtkgHnbglQtfRnF2kV/dVXtyuzaEQef2P2Wpi9nPALhDgJmDuvQwfJVcTBNWuaRvBEXRsTH47lbEDRENJD92kbuIUyyRJhzbHRw5eo0XPkMGo0PvX1XG4ZJJc6WxM8RNtyZrxuOOEDcQa2sljBmEwYpF5cCJzAVrvb9QjwnCQQZAS1ITkhzlN/JcddO2fCzEmJA80JWRCLlKkIBv3b86Wr73ojhwJIIm1DUb5+0rRbss6X1NB1slnZxw6rZKtEerCKjGkZ2U8VMoWj/Tj3K63ZQQ4y0RWsyagU9fBXYzPfgERINenVTDgGrZG428leOENT6rjcNu7r/KK01D6Kct/R/sVFc+C39Pr91EqQG84gflHi4KZjub4An6JJxHaHxAiFx7HG/mSqsmhrnnf4QkkN1B6O+iIYJ09ER2U6j1SsYIxW7vIfVFnJR/07Bdw8FGuZoSeX8KXZSojAeKeCknGH6eqmfdHRS0UmOdiUuOiQ5+ZRz/AHCAmEqHbEY2ytd8zGniYJ63VcbKG/I97D/a4/VXHIbJ0ZShGW6K7hiiO+14aMoDxHdkUpew81x21vBafghha7NLKtMx+Xr1VhyBzSEdpjLDHjQWe0Wlx7wbJ/M0t7sGWwcw0AknXmkdoPPwzOWr2kOa4EEw4R3TAplv+mArDoNx9VUfsjDWIPCn7JOLMpYHwzMeyRvG5VSwttVpuL04jXmK81tP7O3O8CPsq39G9ugPIj6wp7WjP8c48FDMHEOmCBT9iNVDJcAWggkQ7UeITdowNS0tO+o/YpeDhEOEGkjh+3okJFxjCTAuVqMwiKAUSdlwywSRUjoNysscDcx74LSMaOnBj7Vb3ZBThxmyB1ePvgjxAG2JcOijjx981ZuJLNaHxPmiaRGg4o81KBcjX6JgJycZ98k7Jw84Ql3Gh3KNfrFONkAH8E7j/r91EvKd3+oUQBsHFaDefLyQnayLZB/0k9SaJBYBUx13cEMjdek8k7FQx22P/WPBoH7pbsZ5HzFdDidw98VHRcaqbKSBqak+P8omNPNda0/vyRONKn3xhIYQHJSVMwtJ4oSRuj7JUOwnOOi5l6IPH34KMcK0r/NUUFnXED379lLL0LsSpXGnh79wmTYaEvB3ld+GjbhUvPp5oEKAJ0ujGEfze4UftAA18fVJMuNfAJgcfhgHu9QpnFsvvwTSGi580DpIECBvKAO4T3C3KwrXil4mzMNS2vKPREMSBBshOMYhtEnRLSZ0sDjAnzlcMWivRLLdfS6OXEXoKVg8Y80FHDjEUQN/eiabCyJp3e9I3pgcYTuqo9vCBuXM+ijHVmSmB1zZFv2Udh/21GiHSta+6rjQQZBNNZM7+aAE/EP6PJdVr4r/ANZ6j7qIAbtFhyCg99AookAQt/0/dC3T/H7qKJDGH31Qm597lFEDI2/ifqu6jx9AoogBxu3/AB/91QP/ALfdRRMQP5RzHqrP5vAKKIQg9m05D1Tsf5T73riiYGfh/MeX0Ubr4+oUUU8EnMK/X0Kbi/MVFEIorYmq61RRICGx5pmJ+XkfUqKKkAp9vH6BWcK3iFFEwK2J8zvf5l19m8wookwI331RvueX2XVEIAVFFEwP/9k="
                                                        class="img-table rounded-circle mr-2" alt="">Six Pack Club Verde</td>
                                                <td>10/10/2021</td>
                                                <td>
                                                    <i class="fa fa-circle-o text-primary  mr-2"></i>
                                                    <span class="badge badge-primary badge-sm m-t-5">Activo</span>
                                                </td>
                                                <td class="td-codigo"><strong>3.50 $</strong> </td>
                                                <td>
                                                    <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button"><i class="fa fa-edit m-r-5"></i> Editar</button>
                                                    <button class="btn btn-danger m-b-30 btn sweet-confirm" type="button"><i class="fa fa-money m-r-5"></i> Eliminar</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="td-codigo"><strong>7001</strong></td>
                                                <td><img src="https://d1uz88p17r663j.cloudfront.net/resized/15696b61f2de4f3b4fb6a5516ffcd6ab_COSTILLAS_BBQ_1200_600.jpg" class="img-table rounded-circle mr-2" alt="">Costillitas BBQ</td>
                                                <td>10/10/2021</td>
                                                <td>
                                                    <i class="fa fa-circle-o text-danger  mr-2"></i> <span class="badge badge-danger badge-sm m-t-5">Inactivo</span>
                                                </td>
                                                <td class="td-codigo"><strong>3.50 $</strong> </td>
                                                <td>
                                                    <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button"><i class="fa fa-edit m-r-5"></i> Editar</button>
                                                    <button class="btn btn-danger m-b-30 btn sweet-confirm" type="button"><i class="fa fa-money m-r-5"></i> Eliminar</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="td-codigo"><strong>5000</strong></td>
                                                <td><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgVFhYZGBgZHB8aGhocHBweGh4eHB0cGhwcHh4eIS4lISErIR4cJjgmKy8xNTU1HiQ7QDs0Py40NTEBDAwMEA8QHxISHjQrJSs0NDQ0NDQ0NDQ0NDQ0NjY0NDY0NjQ0NDQ0NDY0NDQ0NDQ0MTQ0NDQ0NDQ0NDU0NDQ0NP/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAACAwAEBQEGB//EAD0QAAEDAgMFBgQFBAAGAwAAAAEAAhEhMQMSQQRRYXGRBSKBobHwEzLB0QZCUuHxFGJyoiMkgpKywjNE0v/EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EACYRAAICAQMEAgMBAQAAAAAAAAABAhEDITFBBBIyUSJxE0KBoWH/2gAMAwEAAhEDEQA/APCTp79/dcI09F0tUCoQIfSOMoh3ncyo5tacFY2bCcS1wrGnIiAPFAAYbKSU3MCDSqZiS51pJ3ItnwJNPHSN6AE/DMDQEx4XnnEo8V4kua0VMNHhUk+CYHiHMymWunNwiCLqYYguLm3YQ3WHEUd5DqmAL3EhraakxvP8IsEhpjQrjG+9UBlxnRADMURm3npEyqT3blZcozCFzKAKzMI6290TagU9+/qmOxAaAfYIMRmURfedOSABL5FaxaKxFJO/RW2YgDXFw7xEVtcGfBKwQPmNOH8JkZRY7wDqgBIaJzOMzWeHCU92ICykk0hvGbmeGiY97XCPlM2ibbkOK0/l3V3oADKQMzhU6e/BcLIA4ny3+96J7C3K5wPyzGom43zQLoIfIIIGp0PCeqQCWMLjQ93Q31qOfNWDA7o93RBrQJAtQeBrbTTxSXH7ctaIADaHQC061nSoHvxKoPaeJ5zbgrLZ1r7mnD7pRcdUAIYyZ4VUamYrBDTrHpRLDTKBnSVC1dIXEADl4KIs7uHRRABiDXqd0qNvwXGt3WTSKCeMHoPJAjgZQncf261Whsb4yiL90m9DAjmJB8FTcAJmft7qjY7K4GIg250PvggDQw9n1MABxk8ZJE8DBXSwtLWAQbEjWunGKK3jbNneMu9gNafKBPjXqqL8UMa3IQHHfoNY1r7umAk/Nl0BsJ5z1XGtJ48KmF3CDv8AuFSZn3+ysbOwZ4mYv9POEAJZhyQNT7+64cKLiAPcLSxsERLTetxUH7GR7pV2kyAAPA6deSCSniRAIp718h4KYbS6gNN2p57k9mEXG2Y2E2HG6thmRvHjvQBSeWikd7ySMPDJrPD9laa2ZgE8hM33WRZDIEBsXF+iAAwsOZpXdePdUGKwkm9NYpxVxmDDokibGgkb05jnOs3OGnui073Hlu+yAKrNlcBmLZMU4Ljg+IJqaQLTuVxwxIa7EOWXEBhoDE9RCquxC4d0wOIv9v2QANQJJLjrF4INdy7tETlMGDHAQu4LXOcGtnKASSbRFSfe9cxsMySBAsDqTc++SCiu50iagVvY/ZBjYl591uOqPFAjfF+CqvJI4D2UgI1pcD/BEzHkFx7NSuvBABrWhvbRCcZxmRM/ugBJw9UMDVWMKvd/kfsgcxAChNr7lHBdLEbcMi193BAxcngomZRu8/2UQA0gaTBFfXxSyaRFdCrGMQCQLSefugok0HOeiBEa2wieR3p+Fs5oYJpP8pRAkEVt1uei0mYga804HkK/RAHDiEVmBArYd2oPgSPLeqwYJLr2iYoRFkbMMuDgRMdImYnWwsmvYJpaJjdKZILnF1u7vP2+619l2HADWsc8Me6JkipcJHzPaANAdbzoKDGxJ0pTx99Vdd2Y/GyPDj/8eWuG98d58gEPEX4xVZZpdqu6GnXA14wqD4zCBESWTU8MUwQeGlEntTEwMJgLDh4zsxDwXODgN4yPqJos7auw3sMFzXGCWzhvAniHZljOL7PDRkpLRE61oOCxjNvmyJz0elGjjdqudBaxjBFgXmePecUDdre9zRLa7xAHG6zw5FKvul7OXvle57jD2Vju63EAMGGtYfy3gnFAk3jcl4Wxta/58MyQAXNBnN+Yf8aOqxNm7AeWGmz1H5mvkQZockKnj9juYXS3Ac4CWgWr/k0ehWayN/sdn5Ev1NT8Q/CYW5Mry4El4xMbukEgjIMUtAtCy2dovbEZRAigdyk96pVAvzVLWsNiBYxTNzN139lpcvZzTnLudGxgdsEVxGNfApLntI8WuW1g4DMZjSWswyakNGJiTTM0QHgzEUheNaZ0VnZuznYhkNw43vexkkcHA9YUyk63orDN9zvU9c/saGEsfLXNmmA8SJEwfjXE13VXMfsp3w3uD2ZmA5QWEB5DcxEnFJEjeF5zaexHmSMHAyisNxcN0chlCr7Xg/DaGnCgOHdcDrv+kQhTd+RtLJo9Dj9qcRUgC9j913DxwPmE1uNBr3Tc+IVVp4rqrul7OT8slyXiAW0MtBvEObuBHgbE2KS/Bium9FszKnkrmIwQNxGovIstYu0dWOTlG2UC03Bg60Ua46nkfIgpxwsoMG3VKe0QRrce+oKo0CdhgCL8tElzeqssILTqZ6UFPLzScQGvBAA/Fd+nzURfFG4qIGP2kAPeMwdDjBm96+nVVxSqLLET7rHRMe2Q2kCxjU70CFtPCqa0dZUaKWmqPCbJiYoTeNJjyTAJjzprfjMUEaWTXBwuIOo9+C7hNB8NdwqrDgMwGgpPAUHkgkubNs7S0EfMLzbUDnS8c9V6Ls97mMa0NNq0Ji+6115lgmTMRFt1dBWVv7NtAacuegyzU/p3CmoXH1nivs1w7s72ie8zkV4jt3D7zj/cPQr1mM8lrDmzVIBmdBIXmu3B83gfOPquTBpIvOri/owiaK/sGztJbmE5vITRZq2uzavwo1DeoNfMFdeR1GziwQTlqfQ8DaoGXhvr0Wf2ge/4BWcDGdkNJhrj8moawt0/z6LP2x5JBcIMHSLFedHSj02jxe37K7OcrSRJHmljs59S6Ght6gnoFq4zSXwBPf4cDqu4zDD5BEa0I1+67FkaVHLLBGUrZY/DX4bZtOMzDfiPaHh1WZQZaMwFQb1XqNn2HD2dz8JsuaxzmguALjF5IAF5WT+B8WNr2f8AyI6sctX+oDn4hcA4F73VP+T7bogeKjNK4K/ZpjxRjLRcFnbGscx3dbaxaF5f8TbMz+na5rQCDoAPRejx8YCWBsS0G8xIcYryWN24J2U8J9FjBtSKnFOL04PDgURMG5Aw2XRfxXoHjM0ezpJd4DrP2V/F3C8RW19/gqXZrHS7KYqOM0d7orT2AmBUEy4/U7r+a2h4nXh8EVXExQCmkjVKcwm5HgNaJ+JiAzSfdkIIDvdpVmxXw8TKCHUsZm8UA80LsZp3rr2R94UeIn3xqgBWXkom5x+n/wAvsuIALIZM0pNPCPVM/KK6keQPqu4kteM3Q7jXwoQlG9668+HBADcEDW0j6qzhMzW6ndMQOvmqbKqxPX6FMkeGVIGl/Dj9lZDBWNBOgtANkDCPm3X3Rofe5HhlznNhhymxBiZ1p6oAthsiI04ydR6r0+x5stAAJPQUXkcPDxHvykChES+sWFMq9Lsm24ZAmQ6TN4aSTAcdJim+m9cHXW6X2a4XFXboR2iKNoBXReT7bs7kfv8ARei7U21pYCzvAGrphg/6jQ+C8d2rtod+Ym47ohvgTU+SwwQluVkyRqlqZQK1/wAPYp+Kxv5ZJrp3SZBWMDotn8MR8ds/pdHM0C68ukH9HHj0mvs+hYex4WSAz8twXesrP29oGUCYAit/Nbbg4NNREDRYnbeM1mXMQKGBqeQuV5kW5NHpvTVs8xtu1DDfmIPzaR9eSQ/tZjmuHfE8B9Ckdtvl1oqLnva6aLJBXoQxpxtnFkytS+J6j8P9sYeFjYT3Ewx7TRtbZadV6rYtlce8X5QA2mRpgxUyV832Ns4jB/e31C+o7CwBpo4yYp9lz9T8aSNenlKSbZH7K4OcS5rhlgdwA2gVHM9Vl9otnZnDgfQrbxADmMabq24rI2twGzuzEAVusIN9xvLx1PnbawmMKS1yNjoiq9Q8Zo1+yw7K6LlzfLMVac0gFpgEwSNwvFr0qp2VhhuGXuqCA4/Ro5xCU6tYqdPMraCqJ1Y1UULe4AUt780mY52Ruad3vSEvj1vvVGgGLMAzvQvZF+Xjb6JhFDwqo8QBv9n0KAF5Bx8/somfH4t6BRAAYmI55k7h5CFI011XHH3+66xtb1IG8QmAzDMWTQZKBp7szqu4aCS9gOg0qZgAT0+qdgOJMAAbo37uaSxrZETNhx3Gim17QGgtYb3I3G7W8OOvKZmU1FDjFyYXanaVcjDOaA94/NWrW/26E/mqPl+axh9oQ2CxriBALpiBYOaDD40zWXnmd5/Kv0Ctl1OK48nzepzdS2pJRex3tPaHPq9xdFpsOAFh4LExXANk/qotDaGnf1VTa2jLA5ytIJJUViXt2Z7eZWt2I+MSolsQ4WkXuLGgIOhAWKzEnwutfslpBLlU/FhkuKtHtf6prQXjFMumS0TiuBjuvBGVuWIDpPC6we1dvcQcgyUPekueebzXpC47FKobU+aeC54QpmUJzlLUztosD1570lrzuTtsZDWknnH1Vdrl1JG7Whb2HEh7CQSJEjhrHH9l9G2btF7GNEsg5i3EdOV8WZE91+8cKL5vsPzjmvVbNtz2TkeWzfdTWuvG65c8FJozeZ43S2fo9HtnajgC4gYQIu/5zT8jBU8yvMntIw8MBJAJL31eR/aLMHKSlbRiySSSSdSZPUqjs7/nP9p5qceJIcc0sm5k5r+9UzZ25iG77nhqkPfUmImsG9Vo9n4cNLj+a3L+fRdT0RGR9sW2Xf6osLWEwwwY0BgQeXverZPunv2EjZ9gGNitYTAyvc4jc1jT6odhxJYJuB5RTXj5Ksc+DTBJ9qTHP092Cr4tKfXldMe+41mPBJiTBr5axPFanQCwwRr6IXA2mmngo68fsuGwJ5IA5lCi7k4KIAAbzUnTzlNeeKUDzpTwXQL/AHqmA5jJHhKPDQNfuVprG5Rb62QSFivhpyyPsSJ0VF7iaEyrWIDkJ5eoVM2WGTyOTNOUZfFtAZMgcRWk1RbTtGV0RNGmebQ7dxUxD3TyStrb3h/iz/was0tdSIybTctxeJjzvXMV4c2OEHf4H3ZDlXouwPwz8ZhxcRxYwCWhsZncZNhfSqbkorU2xuUnUUeObssOm/otvZXANAkcd63ti/CbMfO1j3Me2ozQ5p4OiCOYnkvMbTsrmPcx4hzTBHu4SUo5FoVmjKPkjQL+irY2KJp+6p5Vo7E3/ltqJEkfBg6iXumDpITUUjOFWZ22M7t66Dz6QVm4FREVmAfot/ICKgVuk/0rCQYrXU7typSRS6iNVQPZ2EBXQUn1K0w5VMNmWgsm/E4eY+yzkrZjKUZPcPEZT30Q7O7KHayNR9ksuJEBJGYHQ76/ROKNISS5M74ebFyCam+4XPktwWtQWHAWVbZtngucYzOpTcKnqfRWinJ2YdTNSlS2NHsbAc7FkOyjKcNx/ND4YcumahMmg3Gyo7Kyhi2aK8AAm4G2uYHtFA4QTrQusb1mwvArEyrZ2gN31mPC3VVDc6sNaa+/4dzcaV8eHBLeNU0v0PvySMW+79XgVudILrVNNP3QvbDokxfquvdNfdEDjdAHY4qKZ+CiAAYNCY5KxkGUEXJ13D2FXbvsic+fBABq6WNy0dqDERFK15qoWzlA9fqnNkEJkjH0Y7WlY4GVSV9zAWOOobbhSoVEHQFYZNzi6nyQGMe6eR9Ee1sq3/Bh6sCB9GnWiudoMrh8cHDP+iz5M4uoszXNoV9R7NYPhuAHdDGgaUAERzC+awva/hLtVrmOwXGHhsMn84Fom7gNOE71nlVo6+jnFSafJo/hoj4ryBUT03Lyv4vwAXB4vncw8RGZvSvVep/DD3fFe0htjpzXk/xPtjXvyMMhrnFxFi40gch5kjRZ4t1R19U0sbs89kV3ZTGz7QN/wvJ7iq+VOaYwsQbyzyLl0vY8uD1/jB3IYjgiA9EsPAqaCCgzQcazVIftLdBm5W8TZLxHl96NGn1P2CPAY0ilYpUW5CwRRagkrZz4ztAPAF3nQLhc/jyhv/6THsMzMClyfEQaVQ52y6XCsDxAiUFJrhFxk5WzflH5jpKIpeCBlaBBEUi1ymbuJUnPLyAeK++Kc0mDa58vqnbOww4xeWyLkRmIG6kEndzScNs1v3nebj9lpjep2dOvkcyQgxaT9f2THggGdd/rRVnv00W52BOnKDpMeiHKandA99ET3y0CwuEBNaG+nmgYMqIc6iABc5EwpZB1RtrdAhzXzVPwyq5imURQTxOqNgTEaGdrsN80flMcaW5+63WeDAV0Q5rpuGu8e6b8VSKwybnF1XkjjqtPL6LQ7RbTBjXAw+tQs/EsVf2493BIv8FnUOeszBeLPT9t7Js2y4mBs78Jpwjhzivyk4hcZGYPHeEGIApEiFQ7U7JwG7BgbS1jg/EOVxzuLRlJGbKdTHmtTt/ZTt2LsuJgyW4rMj3AEhjm1dni0SbxMIO1dmeezdkY2p+I5gA/MS97WxzKp8m71bpaVoZeJ2YG7Czahj4wzu+G7DmWyCQ4yHDu90mDyQYP4Xc978PBxmPOGxrzma9ndcAZFDUSKLW2/CczsdrHCHNxntcNxD3TbjC0Pwu6dr2gkf8A1meIyMQkrHXc0pejw239lYmEGOeAWPE4b2kOY8cHD0MFVyz/AIOKdxZ5ly9b+IsSNh2VjGF2FVwxjTvEuLmZLtIJIqdF5pjP+WxzudheZelIypRnS9FFzeFFTc7O6BYW+p8E7aMTK08aDmUluB3QAa6cUIcFStjGBwMEQBM0EQLGdTvQYcmje622bU8vuiLCYbMgDvHedyY7FaLcoG/kgL9HW4LREiTvNT5qPAEm2qjMUEFxoBPG2qVJMyc1bCBxHMQglJt6l3MCARaBELoFRzQYdmzeBPNMaahSZSVSos4ZGUgUcQLXMhpI4NABJ3yuMeG4bSKuMyd0k++Pgruy4YGG5wBzFpBMgS0NFG7m2zHWWtFyqmFhPexkNNgeVKHhMz/CqK1O3pLt/RUxnGK3p5pLcIuMW1P7rRfspvwuDrwdaoi0mpiVnufkOX0t4fdbqV7HbVHMR1uFEDJHe1KEmVwup5KhDoUUyHj0/dRAFYV1RtRNYmMw0CBaK1t9k1qJuGnjAGk8ZPVMk7hNMHiDoNx1/lVHBaLMOeAg+hWaw0WOVanH1O6ZHN9FZxHS3D/wA/2cqwNFae0lmEQLsn/dwWJh+rCwnw01ifmh8SOLRda/Z/aWI0MGHtTmgZcocczGmoMAhwAbaaUNFj4pZoxzfGa+K78BhMBwALiJNg2JBsDwU07tM9DF1mKONQliTa5Tps28HbcUYTsJ4ZjYeK4vyOJzBxcASCwhzSSRTVP7K7Zfs+I/GxMEvOK34YLXZGta2kNDmmYgC+i80MMgZg6O7moTI72WOcruIcSgJJa0xBgiTWBFinclszSOboZyXcpR+naN3tLt5jtkZsmGx4DTmc9+UEkuc4w1s6uOqyWH/ldo/wA8H1xFWxHzF6bzPRNzxs2MN78Lyz/dVba1PPyOP5mou0rSdVaMnaj8g4k+SnwmlwcCDAqL2ESptPzMm0FEzBAJIBBIOtK+7JgnUV/TmFiDdBPeO62/SiU7DM2kF3+pOa/ku5ZIFQcttJncPdUT6ECYg0NpadJtITGtHoDtL6EDUyQKgeVydEBB+YGXd61o4cRuTxDg6+WIB1NfmrWirF1Axw1odIqSeiEVHajUY6QDvAPUBEhIFIoIEdEX7+ig5X5f02Wf/DOkVnW+X65W78zjYKi7bP8AgtwxDoyn4bSyzQAM95kjMRQ14I8TFHwwyBQmfC5G9xgSdAGgarIxYB7sA+/NUo9x39HKnJjcTbXV7xB3Cw4DcOqpudN0LnoSVvFKKpHW3Y/PSi41yUX0hEDNBzVCHfGXVXzKIA024NkYw4RPNe7AXGuPBAhzMNO2cA33R+6Q0nx99EQLhuCZJZYNNbfRYrDMFamDOYa1G/esvDoBBmf5WOXg5OqWxJ4ytbZQzJs5xCQDhvggT3viPiRBosgU0VrZtuaGNZiYedrJyODyx7Q4kxqCJrUalZGEdmbx2VlwWtgmRL2UAmoJIFZFrhUW7GXEtJwwRbN3c0mmUtAJO9CzthneAfiNzAgjEY14IN+82Ch2PaMhGR2G8ah2utnRCbaKcSY3ZeI12XJUjN3HAyK2mpseiSWuFS57ZId3mugmKGRM0WhhPc0S7AeK/Nh5oiLS2nHrvTcHtBjhHxnDKAGte0G1IkRECxlKk9ie1L/hkuzuEZmOF6Fs+cFJxgRhvaad5n/stvZmNe5zy3DfMFzZyxAggUJ3LJ7QYGjEAGUZmUvFCfFDVIIr5J/ZlbWKN4HyNFGNcXB2bu7uYhOxWZgRvF1UwhmblmIvvjXz9U0XHYYwEtBuWyCN8Xr0KgYXD5gWmtu9TQ6LocA64IdSR+oD6hVcShIk1JpX0TKSbZcDHCzwdwdXzQDBdvEGuXLLZ33noq1BYf6j7rgI5eDh6FFDUX7/AMNc35KD6LjrroPooOb9g9rflBk1dmy8BMFw9Bx5Ko/CqTX6+qbtAzuzuudB8oAsANwsmZxanGZW2NHb0qSi6KGJhx/EJULRdRpApOteNFWdhLQ6iqWprDQgGDc9EYwuiH4RTAryorPwhuPVRAGzl9x+6IHn0/daP9L/AGu/7SPNxQN2T9QjwP0KYFQP59Aiz8/JWjswH6Tzp9SujAZw5d36PPokBVZjQRzCLZttZ8FrHtgtoJzQe8SDHy6gkkzQisp7NlbrA5lNZsza2FOFONlnJWZzx93ItmDg4jnAMYQMTKHMflLgWz3WmkUOt6JG39ksa8MaXtBkS+sZeVxxVo9m4TtK7xT0Ub2a5pa5mK8FtRmhwB5Gyhoxl08uEmZmJ2Q8NL2uY8b2uqNKgqpibA+AXMcBcOy0pxC3X4WMAGlmHiAZa/K8hhmJO+xrqm4naQZQsxcIQQY77a85pKmjJ4mt00eXwHvaZY9zHDVriFfPbOPHfc3FA0xGMf5kT5rTwMZmIWtJwnUYO+Mpp8zQbgCIJiqDE7KZ8PMGvzGBLHBwkUdrrUgQjtJSlwzNPaGG759maDvwnvZ5OzN8kra9qY5hawYhLi0nPEgNBoCL3V3aeyWkwzFBluYB7S0mv2g+KW/sTFD2NgAPeGBwMtkgHnbglQtfRnF2kV/dVXtyuzaEQef2P2Wpi9nPALhDgJmDuvQwfJVcTBNWuaRvBEXRsTH47lbEDRENJD92kbuIUyyRJhzbHRw5eo0XPkMGo0PvX1XG4ZJJc6WxM8RNtyZrxuOOEDcQa2sljBmEwYpF5cCJzAVrvb9QjwnCQQZAS1ITkhzlN/JcddO2fCzEmJA80JWRCLlKkIBv3b86Wr73ojhwJIIm1DUb5+0rRbss6X1NB1slnZxw6rZKtEerCKjGkZ2U8VMoWj/Tj3K63ZQQ4y0RWsyagU9fBXYzPfgERINenVTDgGrZG428leOENT6rjcNu7r/KK01D6Kct/R/sVFc+C39Pr91EqQG84gflHi4KZjub4An6JJxHaHxAiFx7HG/mSqsmhrnnf4QkkN1B6O+iIYJ09ER2U6j1SsYIxW7vIfVFnJR/07Bdw8FGuZoSeX8KXZSojAeKeCknGH6eqmfdHRS0UmOdiUuOiQ5+ZRz/AHCAmEqHbEY2ytd8zGniYJ63VcbKG/I97D/a4/VXHIbJ0ZShGW6K7hiiO+14aMoDxHdkUpew81x21vBafghha7NLKtMx+Xr1VhyBzSEdpjLDHjQWe0Wlx7wbJ/M0t7sGWwcw0AknXmkdoPPwzOWr2kOa4EEw4R3TAplv+mArDoNx9VUfsjDWIPCn7JOLMpYHwzMeyRvG5VSwttVpuL04jXmK81tP7O3O8CPsq39G9ugPIj6wp7WjP8c48FDMHEOmCBT9iNVDJcAWggkQ7UeITdowNS0tO+o/YpeDhEOEGkjh+3okJFxjCTAuVqMwiKAUSdlwywSRUjoNysscDcx74LSMaOnBj7Vb3ZBThxmyB1ePvgjxAG2JcOijjx981ZuJLNaHxPmiaRGg4o81KBcjX6JgJycZ98k7Jw84Ql3Gh3KNfrFONkAH8E7j/r91EvKd3+oUQBsHFaDefLyQnayLZB/0k9SaJBYBUx13cEMjdek8k7FQx22P/WPBoH7pbsZ5HzFdDidw98VHRcaqbKSBqak+P8omNPNda0/vyRONKn3xhIYQHJSVMwtJ4oSRuj7JUOwnOOi5l6IPH34KMcK0r/NUUFnXED379lLL0LsSpXGnh79wmTYaEvB3ld+GjbhUvPp5oEKAJ0ujGEfze4UftAA18fVJMuNfAJgcfhgHu9QpnFsvvwTSGi580DpIECBvKAO4T3C3KwrXil4mzMNS2vKPREMSBBshOMYhtEnRLSZ0sDjAnzlcMWivRLLdfS6OXEXoKVg8Y80FHDjEUQN/eiabCyJp3e9I3pgcYTuqo9vCBuXM+ijHVmSmB1zZFv2Udh/21GiHSta+6rjQQZBNNZM7+aAE/EP6PJdVr4r/ANZ6j7qIAbtFhyCg99AookAQt/0/dC3T/H7qKJDGH31Qm597lFEDI2/ifqu6jx9AoogBxu3/AB/91QP/ALfdRRMQP5RzHqrP5vAKKIQg9m05D1Tsf5T73riiYGfh/MeX0Ubr4+oUUU8EnMK/X0Kbi/MVFEIorYmq61RRICGx5pmJ+XkfUqKKkAp9vH6BWcK3iFFEwK2J8zvf5l19m8wookwI331RvueX2XVEIAVFFEwP/9k="
                                                        class="img-table rounded-circle mr-2" alt="">Six Pack Club Verde</td>
                                                <td>10/10/2021</td>
                                                <td>
                                                    <i class="fa fa-circle-o text-primary  mr-2"></i>
                                                    <span class="badge badge-primary badge-sm m-t-5">Activo</span>
                                                </td>
                                                <td class="td-codigo"><strong>3.50 $</strong> </td>
                                                <td>
                                                    <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button"><i class="fa fa-edit m-r-5"></i> Editar</button>
                                                    <button class="btn btn-danger m-b-30 btn sweet-confirm" type="button"><i class="fa fa-money m-r-5"></i> Eliminar</button>
                                                </td>
                                            </tr>-->

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!-- Large modal -->

        <div class="modal fade bd-example-modal-lg" id="modalInsert" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Registro de Evento</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                    </div>
                    <div class="modal-body">

                        <div class="col-lg-12">
                            <div class="basic-form">
                                <div class="container-foto-add-menu">
                                    <img  id="imagenPrevisualizacion" src="https://e7.pngegg.com/pngimages/637/822/png-clipart-font-awesome-upload-computer-icons-font-computers-blue-text.png" class="img-add-menu mr-3">
                                    <form>
                                        <div class="form-group">
                                            <input type="file" id="seleccionArchivos" class="form-control-file" accept="image/*">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <br>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nombre del Evento</label>
                                        <input type="text" id="name_insert" class="form-control" placeholder="Nombre Evento">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Detalle</label>
                                        <input type="text" id="detalle_insert" class="form-control" placeholder="Detalle del Evento">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Ubicación</label>
                                        <input type="text" id="ubicacion_insert" class="form-control" placeholder="Ubicación del Evento">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Precio</label>
                                        <input type="text" id="precio_insert" class="form-control" placeholder="Precio">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Fecha Evento</label>
                                        <input type="text" class="form-control" placeholder="Fecha del Evento" id="min-date" data-dtp="dtp_HWBym">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Cant Boletos</label>
                                        <input type="number" id="canBoletos_insert" class="form-control" placeholder="0">
                                    </div>
                                </div>
                           
                            </form>
                        </div>

                        <div class="basic-form">

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="insertEventoPhoto()">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Update modal -->

        <div  class="modal fade bd-example-modal-lg" id="basicModalEditar" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Actualizar Evento</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                    </div>
                    <div class="modal-body">

                        <div class="col-lg-12">
                            <div class="basic-form">
                                <div class="container-foto-add-menu">
                                    <img  src="https://e7.pngegg.com/pngimages/637/822/png-clipart-font-awesome-upload-computer-icons-font-computers-blue-text.png" 
                                    id="imagenPrevisualizacionUpdate"
                                    class="img-add-menu mr-3">
                                    <form>
                                        <div class="form-group">
                                            <input type="file" id="seleccionArchivosUpdate" class="form-control-file" accept="image/*">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <br>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nombre del Evento</label>
                                        <input type="text" id="name_update" class="form-control" placeholder="Nombre Evento">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Detalle</label>
                                        <input type="text" id="detalle_update" class="form-control" placeholder="Detalle del Evento">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Ubicación</label>
                                        <input type="text" id="ubicacion_update" class="form-control" placeholder="Ubicación del Evento">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Precio</label>
                                        <input type="text" id="precio_update" class="form-control" placeholder="Precio">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Fecha Evento</label>
                                        <input type="text" class="form-control" placeholder="Fecha del Evento" id="min-date-update" data-dtp="dtp_HWBym">
                                    </div>
                                    <!--<div class="form-group col-md-6">
                                        <label>Precio</label>
                                        <input type="text" id="precio_update" class="form-control" placeholder="Precio">
                                    </div>-->
                                </div>
                           
                            </form>
                        </div>

                        <div class="basic-form">

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="updateEventoPhoto()">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>





        <?php
        include 'templates/footer.php'
        ?>
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->


    <!--**********************************
        Scripts
    ***********************************-->
    <script src="environment/env.js"></script>
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="js/selected_foto.js"></script>

    <script src="./plugins/moment/moment.js"></script>
    <script src="./plugins/sweetalert/js/sweetalert.min.js"></script>
    <!--<script src="./plugins/sweetalert/js/sweetalert.init.js"></script>-->


    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

    <script src="./plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="./plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>






    <script>

        let bandera_foto_update = false;
        let estado = 0
        let codigo = 0
        let $seleccionArchivosUpdate = document.getElementById("seleccionArchivosUpdate")
        let $imagenPrevisualizacionUpdate = document.getElementById("imagenPrevisualizacionUpdate")

        $seleccionArchivosUpdate.addEventListener("change",function (e)
        {
            // Los archivos seleccionados, pueden ser muchos o uno
            const archivos = $seleccionArchivosUpdate.files;
            // Si no hay archivos salimos de la función y quitamos la imagen
            if (!archivos || !archivos.length) {
                $imagenPrevisualizacionUpdate.src = "";
                return;
            }
            // Ahora tomamos el primer archivo, el cual vamos a previsualizar
            const primerArchivo = archivos[0];
            // Lo convertimos a un objeto de tipo objectURL
            const objectURL = URL.createObjectURL(primerArchivo);
            // Y a la fuente de la imagen le ponemos el objectURL
            $imagenPrevisualizacionUpdate.src = objectURL;
            bandera_foto_update = true;
        })


        $(document).on("click", ".delete_evento", function() 
        {
            var element = $(this)[0]
            var code = element.attributes[0].value
            console.log(element)

            swal({
                title: "Desea desactivar "+element.attributes[1].value+" ?",
                text: "No podrás recuperar este archivo imaginario !!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Eliminar",
                closeOnConfirm: !1
            }, function() 
            {
                deleteEvento(code);
            })
        })


        
        function deleteEvento(id)
        {
            var obj = {
                id_evento:id
            }

            $.ajax({
                url:url_base+"/evento.php",
                method:"DELETE",
                data:JSON.stringify(obj)
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if(json.status == 200)
                {
                    readEventosAll()
                    swal("Eliminado !!", "¡¡Oye, tu archivo imaginario ha sido eliminado !!", "success")
                }
            }).fail(function(error){
                console.log(error)
                alert("ERROR API REST")
            })
        }

        function readEventosAll()
        {
            console.log("aqui read")
            try {
                $.ajax({
                url:url_base+"/evento.php?estado=all",
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                var template = ""
                if(json.status == 200)
                {
                    for(var i=0;i<json.datos.length;i++)
                    {
                        var span = ""
                    if(json.datos[i].estado == 1){
                        span = '<i class="fa fa-circle-o text-primary  mr-2"></i> <span class="badge badge-primary badge-sm m-t-5">Activo</span>'
                    }else{
                        span = '<i class="fa fa-circle-o text-danger  mr-2"></i> <span class="badge badge-danger badge-sm m-t-5">Inactivo</span>'
                    }

                        template += `<tr>
                                                <td class="td-codigo"><strong>${json.datos[i].id_evento}</strong></td>
                                                <td><img src="${json.datos[i].foto}" class="img-table rounded-circle mr-2" alt="">${json.datos[i].nombre}</td>
                                                <td>${json.datos[i].ubicacion}</td>
                                                <td>
                                                    ${span}
                                                </td>
                                                <td class="td-codigo"><strong>${json.datos[i].precio} $</strong> </td>
                                                <td>
                                                    <button 
                                                    codigo="${json.datos[i].id_evento}" name ="${json.datos[i].nombre}" 
                                                    foto ="${json.datos[i].foto}" estado="${json.datos[i].estado}" 
                                                    precio = "${json.datos[i].precio}" detalle = "${json.datos[i].detalle}" 
                                                    ubicacion = "${json.datos[i].ubicacion}" fecha = "${json.datos[i].fecha_evento}"

                                                    class="update-evento btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10"  data-toggle="modal" data-target="#basicModalEditar" type="button"><i class="fa fa-edit m-r-5"></i></button>
                                                    <button id_evento="${json.datos[i].id_evento}"  NameEvento="${json.datos[i].nombre}" class="delete_evento btn btn-danger m-b-30" type="button"><i class="fa fa-trash m-r-5"></i></button>
                                                </td>
                                            </tr>`
                    }
                    document.getElementById("tbody_menu").innerHTML = template
                }

            }).fail(function(error){
                console.log(error)
                alert("ERROR API REST")
            })
            } catch (error) {
              console.log(error)  
            }
        }

        $(document).on("click",".update-evento",function(e)
        {
            var element = $(this)[0].attributes
            
            console.log(element)

            codigo = element[0].value//codigo
            estado = element[3].value //estado
            document.getElementById("name_update").value = element[1].value //name
            //document.getElementById("").value = element[2] //foto
            $("#imagenPrevisualizacionUpdate").attr("src",element[2].value)

            document.getElementById("precio_update").value = element[4].value //precio
            document.getElementById("detalle_update").value = element[5].value //detalle
            document.getElementById("ubicacion_update").value = element[6].value //ubicacion
            document.getElementById("min-date-update").value = element[7].value //fehcha





            
        })

        function insertEventoPhoto()
        {
            var formData = new FormData();
            var files = $('#seleccionArchivos')[0].files[0];    
            
            formData.append('file',files);

            $.ajax({
                url: url_base+"/upload.php",
                method:"POST",
                data: formData,
                contentType: false,
                processData: false,
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if(json.status == 200)
                {
                    
                    //readEventosAll()
                    insertEvento(json.url.replace("../",""))
                }else{
                    swal("Foto no Guardado !!", "¡¡Oye, tu archivo no ha sido guardado !!", "warning")
                }

            }).fail(function(error){
                console.log(error.responseText)
                alert("ERROR API REST")
            })

        }


        function updateEventoPhoto()
        {
            if(bandera_foto_update)
            {
                bandera_foto_update = false
                var formData = new FormData();
            var files = $('#seleccionArchivosUpdate')[0].files[0];
            
            formData.append('file',files);

            $.ajax({
                url:"http://localhost/TrailerMovilApiRest/view/upload.php",
                method:"POST",
                data: formData,
                contentType: false,
                processData: false,
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if(json.status == 200)
                {
                    
                    //readEventosAll()
                    var uri = json.url.replace("../","")
                    updateEvento("http://localhost/TrailerMovilApiRest/"+uri)
                }else{
                    swal("Foto no Guardado !!", "¡¡Oye, tu archivo no ha sido guardado !!", "warning")
                }

            }).fail(function(error){
                console.log(error.responseText)
                alert("ERROR API REST")
            })
            }else{
                var url = $("#imagenPrevisualizacionUpdate").attr("src")
                
                updateEvento(url)
            }

        }


        function updateEvento(url)
        {

            var obj = {

                nombre:document.getElementById("name_update").value,
                detalle:document.getElementById("detalle_update").value,
                ubicacion: document.getElementById("ubicacion_update").value,
                foto:url,
                fecha_evento:document.getElementById("min-date-update").value,
                precio:document.getElementById("precio_update").value,
                estado:estado,
                id_evento:codigo
            }

            $.ajax({
                url:"http://localhost/TrailerMovilApiRest/view/evento.php",
                method:"PUT",
                data:JSON.stringify(obj)
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if(json.status == 200)
                {
                    $('#basicModalEditar').removeClass('modal-open')
                    $('#basicModalEditar').modal('hide')

                    readEventosAll()
                    swal("Menu Actualizado !!", "¡¡Oye, tu archivo ha sido actualizado con exito !!", "success")
                }else{
                    swal("Menu no actualizado !!", "¡¡Oye, tu archivo no ha sido actualizado con exito !!", "error")
                }

            }).fail(function(error){
                console.log(error)
                alert("ERROR API REST")
            })
        }

        function insertEvento(url)
        {
            var obj = {
                nombre:document.getElementById("name_insert").value,
                detalle:document.getElementById("detalle_insert").value,
                ubicacion:document.getElementById("ubicacion_insert").value,
                foto: url_baseOrigin+url,
                fecha_evento:document.getElementById("min-date").value,
                precio:document.getElementById("precio_insert").value,
                numBoletosDisponibles:document.getElementById("canBoletos_insert").value
            }
            console.log(obj)

            $.ajax({
                url:url_base+"/evento.php",
                method:"POST",
                data:JSON.stringify(obj)
            }).done(function(datos)
            {
                console.log(datos)
                var stringify = JSON.stringify(datos)
                var json = JSON.parse(stringify)
                if(json.status == 200)
                {
                    readEventosAll()
                    $('#basicModalEditar').modal('hide')
                    swal("Evento Guardado !!", "¡¡Oye, tu archivo ha sido guardado con exito !!", "success")
                }else{

                }

            }).fail(function(error){
                console.log(error)
                alert("ERROR API REST")
            })
        }

        readEventosAll()


        $('#min-date').bootstrapMaterialDatePicker({
        format: 'YYYY/MM/DD HH:mm',
        minDate: new Date()
    });

    $('#min-date-update').bootstrapMaterialDatePicker({
        format: 'YYYY/MM/DD HH:mm',
        minDate: new Date()
    });

    </script>


</body>

</html>
