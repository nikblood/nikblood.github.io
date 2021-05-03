document.addEventListener('DOMContentLoaded',()=>{
    const animate = document.querySelectorAll('.animation')

    const scrollAnim = ()=>{
        let windowCenter = (window.innerHeight/2)+window.scrollY
        animate.forEach(el =>{
            let scrollOffset = el.offsetTop + (el.offsetHeight/2);
            if(windowCenter>=scrollOffset){
                el.style.opacity = 1
                el.style.transition = 'ease-out all 0.5s'

            }
            else if(el.style.opacity==1){
                el.style.opacity=1
            }
            else{
                el.style.opacity = 0
                el.style.transition = 'ease-out all 0.5s'
            }
        })
    }
    scrollAnim()

    window.addEventListener('scroll',()=>{
        scrollAnim()
    })
})

const project = document.querySelectorAll('.project_item')
const project_text = document.querySelectorAll('.project_h1')
const project_i = document.querySelectorAll('.project_i')

// const projectItem = project.innerHTML

project.forEach(el =>{
    el.addEventListener('mouseenter',(event)=>{
        el.style.backgroundColor='#f2f2f2'
        el.querySelectorAll('.project_i').forEach(el =>{
            
            el.style.opacity = 0
            el.style.transition='ease-in-out all 0.8s'
        })
        el.querySelectorAll('.project_h1').forEach(el =>{
            el.style.display = 'block'
            el.style.transition='ease-in-out all 0.8s'
        })
    })
    el.addEventListener('mouseleave',()=>{
        el.style.backgroundColor='#f2f2f2'
        el.querySelectorAll('.project_i').forEach(el =>{
            el.style.opacity=1
        })
        el.querySelectorAll('.project_h1').forEach(el =>{
            el.style.display = 'none'
            el.style.transition='ease-in-out all 0.8s'
        })
        })
})


const left = document.querySelector('.left')
const right = document.querySelector('.right')
const first = document.querySelector('.first')
const img = document.getElementById('gallery_img')

right.addEventListener('click',()=>{
    img.src='./img/co_single.png'
    first.innerHTML='02'
})
left.addEventListener('click',()=>{
    img.src='./img/Rectangle 6.png'
    first.innerHTML='01'
})

