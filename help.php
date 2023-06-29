<!DOCTYPE html>
<html>

<head>
    <title>Ask Help</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Create the ask help form
            var form = $(`
    <form id="ask-help-form">
      <label for="title">Title</label>
      <input type="text" id="title" />
      <label for="description">Description</label>
      <textarea id="description"></textarea>
      <button type="submit">Submit</button>
    </form>
  `);

            // Add the form to the page
            $("#ask-help").append(form);

            // Handle the form submission
            form.submit(function(event) {
                event.preventDefault();

                // Get the form data
                var title = $("#title").val();
                var description = $("#description").val();

                // Post the form data to the server
                $.post("/ask-help", {
                    title: title,
                    description: description
                }, function(data, status) {
                    if (status === "success") {
                        // The request was successful
                        alert("Your question has been submitted!");
                    } else {
                        // The request failed
                        alert("An error occurred");
                    }
                });
            });
        });
    </script>
</head>

<body>
    <div id="ask-help">
        <h1>Ask Help</h1>
        <p>Please post your technical questions here and other users will provide solutions.</p>
        <form id="ask-help-form">
            <label for="title">Title</label>
            <input type="text" id="title" />
            <label for="description">Description</label>
            <textarea id="description"></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>