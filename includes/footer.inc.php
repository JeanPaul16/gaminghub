<footer>
    <div class="rights">
        <p>Copyrights &copy; 2023 - Gaming Hub Nicaragua - Todos los derechos reservados.</p>
    </div>
</footer>

<!-- JS Loaders -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
<script src="<?php echo $ROOT_;?>scripts/utilities.js"></script>

<?php if (basename($_SERVER['SCRIPT_FILENAME']) === 'index.php'): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.4/viewer.min.js"></script>
<script src="<?php echo $ROOT_;?>scripts/main.js"></script>
<script src="<?php echo $ROOT_;?>scripts/scrambling-text.js"></script>
<script src="<?php echo $ROOT_;?>scripts/jquery-viewer.js"></script>
<?php elseif (basename($_SERVER['SCRIPT_FILENAME']) === 'order.php'):?>
<script src="<?php echo $ROOT_;?>scripts/order_main.js"></script>
<script src="<?php echo $ROOT_;?>scripts/order_process.js"></script>
<?php else: ?>
<script src="<?php echo $ROOT_;?>scripts/order_main.js"></script>
<script src="<?php echo $ROOT_;?>scripts/order_commit.js"></script>
<?php endif;?>
 