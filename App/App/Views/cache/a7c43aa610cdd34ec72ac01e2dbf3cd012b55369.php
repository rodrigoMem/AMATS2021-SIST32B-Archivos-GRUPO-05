<nav class="navbar navbar-expand-lg navbar-light bg-light shadow" role="navigation ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Brand</a>
     
        <?php if(isAuthenticated()): ?>
        <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
            <li>
                <?php echo e(user()->email); ?>

                
            

                <a name="" id="" class="btn btn-outline-secondary" href="/logout" role="button">logout</a>
            </li>
        <?php else: ?>
        <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
            <li>
                <a name="" id="" class="btn btn-outline-secondary" href="/register" role="button">Register</a>
                <a name="" id="" class="btn btn-outline-secondary" href="/login" role="button">Login</a>
                
            </li>
        <?php endif; ?>
         
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\citasProject\App\Views/home/layouts/navbar.blade.php ENDPATH**/ ?>