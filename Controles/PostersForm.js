export class Formulario{
    constructor (idForm, idTextarea, idUlPost){
        this.form = document.getElementById(idForm);
        this.textarea = document.getElementById(idTextarea);
        this.ulPost = document.getElementById(idUlPost);
        this.addSubmit();
    }

    onSubmit(func){
        this.form.addEventListener('submit',func)
    }


    validadeFormdate(value){
        if(value == '' || value == null || value == undefined || value == value.length < 3){
            return false
        }
        return true
    }
    //HORARIO DE ENVIO DE MENSAGENS
    getTime(){
        const time = new Date();
        const hour = time.getHours();
        const minutes = time.getMinutes();
        return `${hour}h ${minutes}min`
    }

    //PUBLICAÇÃO DE MENSAGENS
    addSubmit(){
        const handleSubmit = (event) => {
            event.preventDefault();
            if(this.validadeFormdate(this.textarea.value)){
                const time = this.getTime();
                const NewPost = document.createElement('li');
                NewPost.classList.add('post');
                NewPost.innerHTML = `
                    <div class="InforUserPost">
                        <div class="ImgUserPost"></div>
    
                        <div class="NameAndHour">
                        <a href="profile.php">
                            <strong>Erika</strong>
                        </a>
                            <p>${time}</p>
                        </div>
                    </div>
    
                    <p>
                        ${this.textarea.value}
                    </p>
                    <br>
                    <div class="buttonaction">
                        <button type="button" class="action like"> <img src="assets/heart.svg" alt="Curtir">Curtir</button>
                        <button type="button" class="action comment"> <img src="assets/comment.svg" alt="Comentar">Comentar</button>
                        <button type="button" class="action share"> <img src="assets/share.svg" alt="Compartilhar">Compartilhar</button>
                    </div>
                `;
                this.ulPost.append(NewPost);
                this.textarea.value = "";
            }else {
                alert('Ops! Há algo errado O_o \nVerifique o campo digitado.')
            }
        }

           
        this.onSubmit(handleSubmit)
    }

}
const Form = new Formulario('formPost','textarea','posts');