<html>
    <head>
        <title>The places you've been</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
        <h1>List the places you've been:</h1>
            {% if places is not empty %}
            <p>Here's where you've been</p>
            <ul>
                {% for place in places %}
                <li>{{ place.getName }}, {{ place.getCountry }}</li>
                {% endfor %}
            </ul>
            {% endif %}


        <form action="/places" method="post" class="form-group">
            <label for="city">What City have you visited?</label>
            <input id="city" name="city" type="text" class="form-control" required>

            <label for="country">What Country was that city in?</label>
            <input id="country" name="country" type="text" class="form-control" required>


            <button type="submit" class="btn-success">Submit</button>
        </form>


        <form action="/" method="post">
            <button type="submit" class="btn-success">Delete your places</button>
        </form>
        </div>


    </body>
</html>
