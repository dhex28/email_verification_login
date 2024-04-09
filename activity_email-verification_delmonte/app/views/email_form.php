<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form with File Attachment</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Dark Slate theme CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
            margin-left: 35%;
        }

        .box {
            background-color: #34495e; /* Darker slate form background color */
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1), 0px 0px 20px rgba(0, 0, 0, 0.1); /* Enhanced box shadow */
            color: #ecf0f1; /* Form text color */
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #2c3e50; /* Dark slate background color */
            margin: 0;
        }

        .submit {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box">
                    <h2 class="mb-4 text-center text-light">Send Email</h2>
                    <?php $LAVA =& lava_instance(); ?>
                    <?php echo $LAVA->form_validation->errors(); ?>    
                    <?php if (isset($error_message)) { ?>
                        <div class="alert alert-danger"><?php echo $error_message; ?></div>
                    <?php } ?>
                    <?php if (isset($success_message)) { ?>
                        <div class="alert alert-success"><?php echo $success_message; ?></div>
                    <?php } ?>
                    <form action="<?= site_url('email'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="to">To:</label>
                            <input type="email" class="form-control" id="to" name="to" required>
                        </div>
                        <div class="form-group">
                            <label for="to">From:</label>
                            <input type="email" class="form-control" id="to" name="from" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="attachment">Attachment:</label>
                            <input type="file" class="form-control-file" id="attachment" name="attachment">
                        </div>
                        <div class="mt-3 d-flex justify-content-center submit">
                            <div><input type="submit" value="Submit" class="btn btn-primary" name="submit" /></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
