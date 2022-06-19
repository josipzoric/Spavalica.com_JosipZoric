<script>
   $(function() {
     $("form[name='validacija']").validate({
       rules: {
         kategorija: {
           required: true,
         },
         naslov: {
           required: true,
           maxlength: 200,
         },
         opis: {
           required: true,
         },
         fotografija: {
           required: true,
         },
       },
       messages: {
         kategorija: {
           required: "Odaberite kategoriju",
         },
         naslov: {
           required: "Naslov ne smije biti prazan",
           maxlength: "Naslov ne smije biti duži od 70 znakova",
         },
         opis: {
           required: "Opis ne smije biti prazan",
         },
         fotografija: {
           required: "Odaberite fotografiju",
         }
      },
       submitHandler: function(form) {
         form.submit();
       }
     });
   });
</script>
