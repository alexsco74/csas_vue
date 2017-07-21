<div class="csas-vue-examples">
    <p><b>Источник примеров</b> <a href="https://ru.vuejs.org/v2/guide/">https://ru.vuejs.org/v2/guide/</a>
    </p>
    <div id="app">
        {{ message }}
    </div>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!'
            }
        })
    </script>
    <div id="app-2">
  <span v-bind:title="message">
    Подержи курсор надо мной пару секунд,
    чтобы увидеть динамически связанное значение title!
  </span>
    </div>
    <script>
        var app2 = new Vue({
            el: '#app-2',
            data: {
                message: 'Вот когда вы загрузили эту страницу: ' + new Date()
            }
        })
    </script>

    <div id="app-3">
        <p v-if="seen">Сейчас меня видно</p>
    </div>
    <script>
        var app3 = new Vue({
            el: '#app-3',
            data: {
                seen: true
            }
        })</script>

    <div id="app-4">
        <ol>
            <li v-for="todo in todos">
                {{todo.text}}
            </li>
        </ol>
    </div>
    <script>
        var app4 = new Vue({
            'el': '#app-4',
            'data': {
                'todos': [
                    {'text': 'oNe'}, {'text': 'tWo'}, {'text': 'tHree'}]
            }
        })
    </script>
    <h2>
        Работа с пользовательским вводом
    </h2>
    <div id="app-5">
        <p>{{ message }}</p>
        <button v-on:click="revMes">Обратить порядок букв в сообщении</button>
    </div>
    <script>
        var app5 = new Vue({
            el: '#app-5',
            data: {
                'message': 'Hello, vue'
            },
            methods: {
                revMes: function () {
                    this.message = this.message.split('').reverse().join('')
                }
            }
        })
    </script>
    <div id="app-6">
        <p>{{mes}}</p>
        <input v-model="mes" type="text"/>
    </div>
    <script>
        var app6 = new Vue({
            el: '#app-6',
            data: {
                mes: 'Hello vue!'
            }
        });
    </script>
    <h2>Разбиение приложения на компоненты</h2>
    <ul class="app-66">
        <!-- Создаём экземпляр компонента todo-item -->
        <todo-item v-bind:todo="mes"></todo-item>
    </ul>
    <script>
        Vue.component('todo-item', {
            props: ['todo'],
            template: '<li>{{todo.text}}</li>'
        })
        var app66 = new Vue({
            el: '.app-66',
            data: {
                mes: {text: 'Передали текст в компонент'}
            }
        })
    </script>
    <h2>Разбиение приложения на компоненты. Входной параметр.</h2>
    <div id="app-7">
        <ol>
            <!--
              Теперь мы можем передать каждому компоненту todo объект
              с информацией о задаче, который будет динамически меняться.
              Мы также определяем для каждого компонента "key",
              значение которого будет объяснено далее в руководстве.
            -->
            <todo-item
                    v-for="item in groceryList"
                    v-bind:todo="item"
                    v-bind:key="item.id">
            </todo-item>
        </ol>
    </div>
    <script>
        Vue.component('todo-item', {
            props: ['todo'],
            template: '<li>{{ todo.text }}</li>'
        })
        var app7 = new Vue({
            el: '#app-7',
            data: {
                groceryList: [
                    {id: 0, text: 'Овощи'},
                    {id: 1, text: 'Сыр'},
                    {id: 2, text: 'Что там ещё люди едят?'}
                ]
            }
        })
    </script>
    <div class="app-7">
        <ol>
            <li-item
                    v-for="item in li_ite"
                    v-bind:li_in="item"
                    v-bind:key="item.id">
            </li-item>
        </ol>
    </div>
    <script>
        Vue.component('li-item', {
            props: ['li_in'],
            template: '<li>{{ li_in.tex }}</li>'
        });
        var app77 = new Vue({
            el: '.app-7',
            data: {
                li_ite: [
                    {id: 0, tex: 'One'},
                    {id: 1, tex: 'Two'},
                    {id: 2, tex: 'Three'}
                ]
            }
        })
    </script>
    <h2>Подписка на события</h2>
    <div class="my-cou">
        <button v-on:click="addCou(2,$event)">Нажми меня</button>
        <p>Кнопка была нажата {{ cou }} раз</p>
    </div>
    <script>
        var myCou = new Vue({
            el: '.my-cou',
            data: {
                cou: 0
            },
            methods: {
                addCou: function (i, event) {
                    this.cou = this.cou + i;
                    console.log(event.target.tagName)
                }
            }
        })
    </script>
</div>