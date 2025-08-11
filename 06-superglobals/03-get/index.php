<?php
echo htmlspecialchars( $_GET['name'] ?? 'default');
?>;

// to prevent xss