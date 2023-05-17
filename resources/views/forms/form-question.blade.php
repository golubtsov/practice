<div class="container-message">
    <p>Тур оформлен! В ближайшее время с вами свяжется менеджер.</p>
</div>
<div class="container-form">
    <form action="{{route('question.create')}}" method="post">
        @csrf
        <div class="form-title">
            <h2>Задать вопрос</h2>
        </div>
        <div class="form-data">
            <input type="text" name="client" placeholder="Ваше имя">
        </div>
        <div class="form-data">
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="form-data">
            <textarea name="text" placeholder="Ваш вопрос"></textarea>
        </div>
        <input type="submit" class="link-btn" value="Отправить" style="cursor: pointer" />
    </form>
</div>
