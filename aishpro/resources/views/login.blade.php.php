<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Login form</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
}
.formdiv{
    height: 100%;
    width: 100%;
    background-image:url(loginbg.jfif) ;
    background-position: center;
    background-size: cover;
    position: absolute;

}

.formbox{
    width: 400px;
    height: 420px;
    position: relative;
    margin: 15% auto;
    background: white;
    padding: 5px;
    overflow: hidden;
    border-bottom-right-radius:70px;
    border-top-left-radius:70px ;
    box-shadow: 5px 5px 5px 5px yellowgreen;


}
.button{
    position: relative;
    width: 200px;
    margin: 40px auto;
    border-radius: 25px;
    box-shadow: 0 0 20px 4px #7fb41b;
}

.formbtn{
    position: relative;
    border: 0;
    outline: none;
    padding: 15px 24px;
    background: transparent;
    cursor: pointer;
    font-family: Verdana, Geneva, Tahoma, sans-serif;


}
#btndesign{
    position: absolute;
    width: 100px;
    height: 100%;
    top: 0;
    left: 0;
    border-radius: 20px;
    background: linear-gradient(to right, #a0f503 ,#f5f105);
    transition: .5s;
}

.form-group{
    top: 150px;
    position: absolute ;
    width: 280px;
    transition: .5s;
}

#regform{
    top: 100px;

}

.input{
    width: 100%;
    padding:8px 0;
    margin: 8px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 2px solid #8ed806;
    outline: none;
    background: transparent;
}

.select{
    width: 100%;
    padding:8px 0;
    margin: 8px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 2px solid #8ed806;
    outline: none;
    background: transparent;
    color:purple;
    font-weight: block;

}

.btn-login-reg{
    width: 100%;
    padding: 10px 30px;
    cursor: pointer;
    display:block;
    margin-top: 20px;
    background: linear-gradient(to right, #a0f503, #f5f105);
    border: 0;
    outline: none;
    border-radius: 25px;
    font-weight: bold;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

#regform{
    left: 500px;
}
#loginform{
    left: 65px;
}
.social-media{
    margin-top: 280px;
    display: flex;
    justify-content: center;

}
.social-icon{
    height: 46px;
    width: 46px;
    border:1px solid #5d8d04;
    color:#5d8d04 ;
    margin: 0 0.45rem;
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    font-size: 1.1rem;
    border-radius: 50%;
    transition: .3s;

}
.social-icon:hover{
    color:#a0f503;
    border-color: #5d8d04;

}
@media(max-width:858px){
    .formbox{
        width: 350px;
        height: 420px;
        position: relative;
        margin: 15% auto;
        padding: 5px;
        /*overflow:hidden*/
        border-bottom-right-radius:70px ;
        border-top-left-radius: 70px;
        }
    .formdiv{
            height: 920px;
    
        }
    #loginform{
            left: 30px;
        }
    #regform{
            left: 400px;
        }
    }
</style>
<body>
    
    <div class="formdiv">
        <div class="formbox">
            <div class="button">
                <div id="btndesign"></div>
                <button type="submit" class="formbtn" onclick="rgform()" >Sign in</button>
                <button type="submit" class="formbtn" onclick="logform()" >Sign up</button>
            </div>
         
            <form action="" class="form-group" id="loginform">
            <input type="text" class="input" placeholder="Username">
            
            <input type="password" class="input" placeholder="Password">
            <button type="submit" class="btn-login-reg">Sign in</button>
            
            </form>
            <form action="" class="form-group" id="regform">
             <select class="select" name="" id="">
                 <option value="0">Want to register as a</option>
                 <option value="Google">Google</option>
                 <option value="Bing">bing</option>
                 <option value="Yahoo">yahoo</option>
             </select>
             <button type="submit" class="btn-login-reg">Go</button>
                
              
            </form>

            <div class="social-media">
                <a href="#" class="social-icon">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-twitter"></i>
                </a>
                
                <a href="#" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-google"></i>
                </a>
            </div>

        </div>
    </div>
    <script src="style.js"></script>
</body>
</html>
<script>
let loginform=document.getElementById('loginform');
let regform=document.getElementById('regform');
let btndesign=document.getElementById('btndesign');

function rgform(){
if(window.matchMedia('(max-width:768px)').matches){
    loginform.style.left="11%" ;
    regform.style.left="450px";
    btndesign.style.left="0px";

}
if(window.matchMedia('(max-width:812px)').matches){
    loginform.style.left="12%";
    regform.style.left="450px";
    btndesign.style.left="0px";

}
else{
    loginform.style.left="15%";
    regform.style.left="450px";
    btndesign.style.left="0px";
}}
function logform(){
    if(window.matchMedia('(max-width:768px)').matches){
        loginform.style.left="-500px";
        regform.style.left="11%";
        btndesign.style.left="110px";
    
    }
    if(window.matchMedia('(max-width:812px)').matches){
        loginform.style.left="-500px";
        regform.style.left="12%";
        btndesign.style.left="110px";
    
    }
    else{
        loginform.style.left="-500px";
        regform.style.left="15%";
        btndesign.style.left="110px";
    }}
</script>