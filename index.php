<?php
	require('Templates/header.html');
?>


<!-- WELCOME Animation text -->
<head>     
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
    <ul class="fly-in-text hidden">
        <li>W</li>
        <li>E</li>
        <li>L</li>
        <li>C</li>
        <li>O</li>
        <li>M</li>
        <li>E</li>
    </ul>
        
		
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">   
        $(function() {
                
            setTimeout(function() {
                $('.fly-in-text').removeClass('hidden');
            }, 500);
                
        });
    </script>
</body>

<?php
	require('Templates/footer.html');
?>