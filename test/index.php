<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#cars").change(function(){
            $.ajax({
                url: 'backend.php',
                type: 'post',
                data: {cars: $(this).val()},
                success: function(result){
                    $("#result").html(result);
                }
            });
        });
    });
</script>
<select id="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
</p>
<li id="result"></li>