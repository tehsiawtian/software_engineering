

<?php $__env->startSection('content'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification Page</title>
</head>

<style>
    /* Body */
    body {
    background-color: #212763;
    }

    #container {margin: auto;}

    #notititle {
        text-align: center;
        padding: 2%;
    }

    #notititle h1 {
        font-size: 6vw;
        font-weight: bold;
        color: #fff;
    }

    #notibox a {
        text-decoration: none;
        color: black;
    }

    #menu {
        display:flex;
        margin: auto;
        width: 80%;
        justify-content:end;
    }

    #dash {
        background-color: #f7db1b;
        font-size:18px;
        padding:15px 20px;
        text-decoration:none;
        border-radius:15px;
        box-shadow: 0 0 10px rgba(0,0,0,0.4);
    }

    #dash:hover{
        box-shadow: 0 0 30px rgba(0,0,0,0.4);
        transform: scale(1.1);

    }
    

    #case {
        background-color: #f7db1b;
        font-size:18px;
        padding:15px 20px;
        text-decoration:none;
        border-radius:15px;
        margin-left:30px;
        box-shadow: 0 0 10px rgba(0,0,0,0.4);
    }

    #case:hover{
        box-shadow: 0 0 30px rgba(0,0,0,0.4);
        transform: scale(1.1);

    }

    a{
        text-decoration:none;
    }

    .dascre{
        color:#212763;
        margin:auto;
        font-weight:bold;
    }

    .dascre2{
        color:#212763;
        margin:auto;
        font-weight:bold;
    }

    #messagecontent{
        background-color: white;
        width: 80%;
        margin: auto;
        padding: 2%;
        margin-top: 30px;
        border : solid black;
        box-shadow: 10px 10px 50px rgba(0,0,0,0.4);
        border-radius:20px;
    }
    #messagecontent p {
        padding: 20px;
        border-color: black;
        border: 2px solid grey;
        /* border-style: solid; */
        background-color: whitesmoke;
        border-radius: 25px;
    }
</style>


<body>
    <div id="container">

        <!--Title-->
        <div id="notititle">
            <h1 class="mb-5">#Notification</h1>
        </div>

        <!--ContentBox-->
            <!--Menu-->
            <div id="menu">
                <div id="dash">
                    <a href="<?php echo e(route('home')); ?>"><p class="dascre">Dashboard</p></a>
                </div>
                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'student')): ?>
                <div id="case">
                    <a href="<?php echo e(route('helpdesk')); ?>"><p class="dascre2"> Create Case</p></a> 
                </div>
                <?php endif; ?>
            </div>

            <!--Message Content-->
            <div id="messagecontent">
                <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($notification->notification_comment); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    </div>
</body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\amazingphp\Assignment\resources\views/notify.blade.php ENDPATH**/ ?>