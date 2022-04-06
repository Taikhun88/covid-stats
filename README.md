## 1st step create project  
symfony new nameofproject --full  
Tips : (if any issue with symfony command new check if it's launched with proper php version)

## 2nd step  
Add the html structure provided to base.html.twig  
Check if boostrap style is well applied  

## 3rd step  
To consume the API which will get the covid data we will create a Service to consume it  
Tested  
Then in the callapiservice, we build a construct so for each instanciation we are sure to get the httpfoundation methods which will be usable for consumption  


