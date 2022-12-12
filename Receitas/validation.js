function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Nome de Utilizador e password estão vazios");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Nome de Utilizador vazio");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password vazio");  
                    return false;  
                    }  
                }                             
            }  