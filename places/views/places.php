<html>
    <head>
        <title>The places you've been</title>
    </head>
    <body>
        <h1>List the places you've been:</h1>
            {% if places is not empty %}
            <p>Here's where you've been</p>
            <ul>
                {% for place in places %}
                <li>{{ place.getName }}</li>
                {% endfor %}
            </ul>
            {% endif %}

        <form action="/places" method="post">
            <label for="city">What City have you visited?</label>
            <input id="city" name="city" type="text">

            <button type="submit">Submit</button>
        </form>

        <form action="/delete_places" method="post">
            <button type="submit">Delete your places</button>
        </form>


    </body>
</html>
