

<script>
    function ajaxSkills() {
      var category = $("#categorySelect").val();
        $.getJSON("getSkills.php?q="+category, function(data) {
            $("#skillSelect").html('');
            $.each(data, function() {
                   $("#skillSelect").append('<option value="'+ this.skill_id'">'+ this.skill + '</option>')
                  )
            })
        })
    }
</script>
