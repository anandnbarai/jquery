<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid mt-3 mb-3">
        <a href="add.php">Add Data</a>
    </div>
    <table id="customersTable" class="display" width="100%" cellspacing="0">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
    </table>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#customersTable').dataTable({
                "processing": true,
                "ajax": "fetch_data.php",
                "columns": [{
                        data: 'id',
                        className: 'dt-center'
                    },
                    {
                        data: 'name',
                        className: 'dt-center'
                    },
                    {
                        data: 'email',
                        className: 'dt-center'
                    },
                    {
                        data: 'date',
                        className: 'dt-center'
                    },
                    {
                        data: null,
                        className: 'dt-center edit',
                        defaultContent: '<button id = "edit"><i class="fa fa-pencil"/></button>',
                    },
                    {
                        data: null,
                        className: 'dt-center delete',
                        defaultContent: '<button id = "delete"><i class="fa fa-trash"/></button>',
                    }
                ]
            });
        });

    </script>
</body>

</html>
