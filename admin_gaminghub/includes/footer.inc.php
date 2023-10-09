<footer>
    <div class="rights">
        <p>Copyrights &copy; 2023 - Terminales - Gaming Hub Nicaragua - Todos los derechos reservados.</p>
    </div>
</footer>

<!-- JS Loaders -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" charset="utf-8"></script>
<script src="https://www.dev.gaminghub.com/scripts/utilities.js"></script>

<?php 
$file_name = basename($_SERVER['SCRIPT_FILENAME']);

if ($file_name === 'service.php' || $file_name === 'kitchen.php'): ?>
<script src="<?php echo $ROOT_;?>scripts/view_init.js"></script>
<script src="<?php echo $ROOT_;?>scripts/main.js"></script>
<script src="<?php echo $ROOT_;?>scripts/footable.js"></script>
<script src="<?php echo $ROOT_;?>scripts/footable.min.js"></script>
<script src="<?php echo $ROOT_;?>scripts/logout_commit.js"></script>
<?php elseif ($file_name === 'management.php'): ?>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/l10n/es.min.js"></script>
<script src="<?php echo $ROOT_;?>scripts/footable.js"></script>
<script src="<?php echo $ROOT_;?>scripts/footable.min.js"></script>
<script src="<?php echo $ROOT_;?>scripts/management.js"></script>
<script src="<?php echo $ROOT_;?>scripts/logout_commit.js"></script>
<!-- <script src="<?php echo $ROOT_;?>scripts/order_main.js"></script> -->
<?php elseif ($file_name === 'register.php'): ?>
<script src="<?php echo $ROOT_;?>scripts/register_init.js"></script>
<script src="<?php echo $ROOT_;?>scripts/register_commit.js"></script>
<script src="<?php echo $ROOT_;?>scripts/logout_commit.js"></script>
<?php elseif ($file_name === 'index.php'): ?>
<script src="<?php echo $ROOT_;?>scripts/login_commit.js"></script>
<script src="<?php echo $ROOT_;?>scripts/login_init.js"></script>
<?php endif;?>
 