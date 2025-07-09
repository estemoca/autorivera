navigator.mediaDevices.getUserMedia({audio: true}).then((stream)=>{
    console.log(stream)
    let audio = document.getElementById('audio')
    
    audio.srcObject = stream
    
    audio.onloadmetadata = (ev) => audio.play()
    
}).catch((err)=>console.log(err))