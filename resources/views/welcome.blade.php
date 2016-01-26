<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div class="container">
            
            <tasks></tasks>
        </div>

        <template id ="tasks-template">

                    <h1>My Tasks</h1>

            <ul class = 'list-group'>
                    <li class="list-group-item" v-for="task in list">
                        @{{ task.task }}

                        <strong @click="delete(task)">X</strong>
                    </li>
            </ul>
        </template>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.8/vue.js"></script>
        <script src ="/js/main.js"></script>

    </body>
</html>
