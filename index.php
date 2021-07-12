<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div id="head">
        <div class="container  ">

            <div class="row ">
                <!-- <iframe
                    src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2F100007360361889%2Fvideos%2F947264512484616%2F&show_text=false&width=267&t=0"
                    width="267" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                    allowFullScreen="true"></iframe> -->

                <div class="col-12 px-0">
                    <h1 class="text-center bg-secondary my-0 text-light text-capitalize">php with ajax</h1>
                </div>
                <div class="col-12 bg-primary  px-0">
                    <form action="" id="add">
                        <input type="text" id="name" class="form-control form-control-sm">
                        <input type="submit" class="btn my-2 btn-secondary d-flex mx-auto n" value="data">

                    </form>
                </div>
                <div class="col-12 px-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class=" text-uppercase thead-dark">
                                <tr>
                                    <th>i love u h</th>
                                    <th>name</th>
                                </tr>
                            </thead>
                            <tbody id="m">
                                <tr>
                                    <td id="">Lorem.</td>
                                    <td id="">Nam?</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<script>
$(document).ready(function() {
    $(".n").click(function(e) {
        e.preventDefault();

        function load() {
            $.ajax({
                type: "POST",
                url: "ujwal.php",
                success: function(response) {
                    $("#m").html(response);
                }
            });
        }
        load();
        // die();
        var name = $("#name").val();
        console.log(name);

        function data() {
            var name = $("#name").val();
            $.ajax({
                type: "POST",
                url: "insert.php",
                data: {
                    first: name
                },
                success: function(response) {
                    load();
                    swal({
                        title: "Good job!",
                        text: "You clicked the button!",
                        icon: "success",
                        button: "Aww yiss!",

                    });


                    $("#add").trigger("reset");
                }
            });
        }

        function setError() {
            $("#name").css("background-color", "red");
        }
        console.log(name);
        if (name == "") {
            setError();
        } else {
            data();
        }

    });
});
</script>

</html>