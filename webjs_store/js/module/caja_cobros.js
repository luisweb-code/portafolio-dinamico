const d = document;
export default  function cajaCobros(demo){
    let $demo = d.querySelector(demo);
    
    d.addEventListener("click", (e)=>{
        if(e.target.matches(demo)){
            alert("Conexion");
        }
    });

}