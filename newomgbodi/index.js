const TelegramApi = require('node-telegram-bot-api')

const token = '1935370033:AAHVkpDN1Z0K0h_4pL2HnHRhuOgK24BHvJk'

const bot = new TelegramApi(token,{polling:true})
bot.setMyCommands(
    [
        {command:'/start',description:'Начальное приветствие'},
    ]
)
const buttons = {
    reply_markup:JSON.stringify({
        inline_keyboard:[
            [{text:'посмотреть видео',callback_data:'посмотреть видео'}]
        ]
    })
}
const buttons2 = {
    reply_markup:JSON.stringify({
        inline_keyboard:[
            [{text:'хочу узнать больше',callback_data:'хочу узнать больше'}]
        ]
    })
}
const buttons3 = {
    reply_markup:JSON.stringify({
        inline_keyboard:[
            [{text:'что для этого нужно?',callback_data:'что для этого нужно?'}]
        ]
    })
}
const buttons4 = {
    reply_markup:JSON.stringify({
        inline_keyboard:[
            [{text:'что дальше?',callback_data:'что дальше?'}]
        ]
    })
}
bot.on('message', async msg =>{
    const firstName =msg.from.first_name
    const lastName =msg.from.last_name
    const text = msg.text
    // console.log(msg)
    id='-576541403'
    const chatid = msg.chat.id
    const caption = msg.caption!=undefined ? true:false
    if(msg?.photo){
        bot.sendMediaGroup(id,[
            {type:'photo',
            media:`${msg.photo[2].file_id}`,
            caption:`${caption? '1 ФОТОГРАФИЯ':'2 ФОТОГРАФИЯ'} 
            ${caption? 'Описание:':''}  
            ${caption? msg.caption:msg.caption=''}  
            Cообщение от:@${msg.from.username}`
        }
        ])
    }
    if(text==='/start'){
        await bot.sendMessage(chatid,`Здравствуй ,${firstName ,lastName }.Мечтаешь о карьере модели?OMG – это уникальное селективное агентство-бутик, которое занимается плейсментом моделей в зарубежные страны. `)
        await bot.sendMessage(chatid,`OMG Model Management было основано в 2011 году в Лос-Анджелесе Мистером и Миссис ДеВиль.`)
        await bot.sendMessage(chatid,`Мы занимаемся международным скаутингом, развитием и построением карьеры моделей. Наши офисы расположены в Лос-Анджелесе, Будапеште, Амстердаме ,Одессе и Москве.`)
        await bot.sendMessage(chatid,`Команда OMG состоит из профессиональных букеров, многие из которых в прошлом были успешными моделями. Полученные опыт и знания позволяют нашей команде работать с полным пониманием как внешней, так и внутренней стороны моделинга. Это делает нас идеальным материнским агентством.`)
        await bot.sendMessage(chatid,`OMG имеет прочные связи с такими ведущими мировыми модельными агентствами, как IMG, Next, Women, Elite, Viva Paris, Donna Japan, Bravo Japan, Monster Milan и тд`)
        await bot.sendMessage(chatid,`В OMG для нас важны отношения с родителями. Мы подбираем лучший вариант развития карьеры, который не будет вредить обучению наших моделей. Мы хотим, чтобы они были успешны не только в моделинге, но и были всесторонне развитыми и образованными личностями`)
        await bot.sendMessage(chatid,`Наша работа, отношение к моделям и их успехи за границей делают OMG одним из ведущих игроков в мировой модельной индустрии.`)
        await bot.sendMessage(chatid,`Наш веб-сайт :  http://www.omgmodelmanagement.com`,buttons)
    }

})
bot.on('callback_query', async msg =>{
    const chatid = msg.message.chat.id
    const data = msg.data
    if(data==='посмотреть видео'){
        await bot.sendMessage(chatid,'Ты познакомилась с нами, теперь самое время узнать, что нужно для кастинга OMG!')
        await bot.sendVideo(chatid,"./IMG_7377.MOV",buttons2)

    }
    if(data==='хочу узнать больше'){
        await bot.sendMessage(chatid,'Онлайн-кастинг проходит по всей Украине для участия в масштабном проекте OMG Model Management с целью поиска новых лиц и участием в жюри таких иностранных агентств, как Monster Management, Women Management, Premium Models.Участники проекта получат контракт с OMG MM и возможность подписания контракта с международными агентствами. Кроме того, их ждёт поездка в модельный лагерь OMG Camp.')
        await bot.sendMessage(chatid,"Кастинг также будет проходить в офисе OMG MM каждый день в 12 до 16 по адресу г.Одесса ул. Екатерининская 17/1, первый этаж",buttons3)

    }
    if(data==='что для этого нужно?'){
        await bot.sendMessage(chatid,'Этап 1 - добавить 2 своих фото, одно из которых портретное, второе в полный рост.')
        await bot.sendMessage(chatid,'Этап 2 - укажи свои параметры, рост, возраст')
        await bot.sendMessage(chatid,'Этап 3 - Добавь ссылку на свой Instagram и подпишись на наш Instagram ( https://www.instagram.com/omgmodelmanagement/ ) и следи за обновлениямит')
        await bot.sendMessage(chatid,'Все эти данные надо скинуть одним сообщением')
        await bot.sendMessage(chatid,"Пример:")
        await bot.sendVideo(chatid,"IMG_9082.MP4",buttons4)

    }
    if(data==='что дальше?'){
        await bot.sendMessage(chatid,"Команда OMG выберет 10 девочек, которые будут примате участие в OMG Model Project Ukraine.")
        await bot.sendMessage(chatid,"Участники будут объявлены на официальной Instagram страничке OMG Model Management")
    }




})