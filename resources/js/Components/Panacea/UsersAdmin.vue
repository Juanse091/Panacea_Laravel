<template>
    <section class="user_afiliado_container">
        <div class="admin_user_afiliado">
            <div class="container_img_ainfo">
                <i class="bi bi-person-circle afiliado_identifier"></i>
                <div class="afiliado_info">
                    <h2>Andrés León</h2>
                    <div class="afiliado_id">
                        <h2>ID:&nbsp</h2>
                        <h2>1005260550</h2>
                    </div>
                </div>
            </div>
            <div class="container_tipo_icons">
                <h2>Afiliado</h2>
                <i class="bi bi-pencil-fill afiliado_pencil_icon"></i>
                <i class="bi bi-trash-fill afiliado_trash_icon"></i>
            </div>
        </div>
    </section>
</template>

<style scoped>
.user_afiliado_container{
    background: #F5F5F5;
    border-radius: 25px;
    width: 60%;
    margin-left: 10%;
    margin-bottom: 40px;
}
.admin_user_afiliado{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}

.container_img_ainfo{
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-left: 40px;
    width: 50%;
}

.afiliado_identifier{
    font-size: 100px;
    color: #8D8D8D;
}

.afiliado_info{
    display: flex;
    flex-direction: column;
    text-align: justify;
    margin-left: 20px;
}

.afiliado_info>h2{
    color: black;
    font-family: 'Montserrat';
    font-size: 32px;
    font-weight: 500;
}
.afiliado_id{
    display: flex;
    flex-direction: row;
    align-items: center;
}

.afiliado_id>h2{
    color: black;
    font-family: 'Montserrat';
    font-size: 25px;
    font-weight: 500;
}

.container_tipo_icons{
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-right: 40px;
}

.container_tipo_icons>h2{
    color: black;
    font-family: 'Montserrat';
    font-size: 32px;
    font-weight: 500;
}

.afiliado_trash_icon{
    font-size: 40px;
    margin-top: 3px;
    margin-left: 20px;
    color: rgba(141, 141, 141, 1);
}

.afiliado_pencil_icon{
    font-size: 35px;
    color: rgba(141, 141, 141, 1);
    margin-left: 100px;
}

@media (max-width: 500px) {
    .user_afiliado_container{
        background: #F5F5F5;
        border-radius: 12px;
        width: 96%;
        margin-left: 2%;
        margin-bottom: 15px;
    }
    
    .container_img_ainfo{
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-left: 15px;
        width: 50%;
    }
    
    .afiliado_identifier{
        font-size: 50px;
    }
    
    .afiliado_info{
        display: flex;
        flex-direction: column;
        text-align: justify;
        margin-left: 6px;
    }
    
    .afiliado_info>h2{
        color: black;
        font-family: 'Montserrat';
        font-size: 17px;
        font-weight: 500;
    }

    .afiliado_id>h2{
        color: black;
        font-family: 'Montserrat';
        font-size: 14px;
        font-weight: 500;
    }
    
    .container_tipo_icons{
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-right: 5px;
    }

    .container_tipo_icons>h2{
        color: black;
        font-family: 'Montserrat';
        font-size: 17px;
        font-weight: 500;
    }
    
    .afiliado_trash_icon{
        font-size: 20px;
        margin-top: 3px;
        margin-left: 8px;
        color: rgba(141, 141, 141, 1);
    }

    .afiliado_pencil_icon{
        font-size: 18px;
        margin-top: 3px;
        color: rgba(141, 141, 141, 1);
        margin-left: 30px;
    }
 
}

</style>

<script>
    export default {
        name: 'UsersAdmin',
        props: {}
    }
</script>