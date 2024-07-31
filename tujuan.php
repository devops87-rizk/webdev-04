
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
    Welcome kakak kesayangan <?php echo $_POST["nama_lengkap"]; ?><br>
    Your age is: <?php echo $_POST["usia"]; ?>
    <?php }
          else{ ?>
     <script> location.replace("index.html") </script>
     <?php     } ?>
</body>
</html> 