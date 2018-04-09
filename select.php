<?php
/**************************
*此程式功能为select下拉菜单的模糊查询  
*在input 框中输入，符合条件的选项会默认选中
*create_date:2017/11/16
*create_by :wangzhijie
*
*/

?>
<html>
<body>
<script>
function check() {  
              var txtSearch = document.getElementById("txtSearch");  
              var academy = document.getElementById("academy");  
              //数组List存放所有option 
			  var List = [];  
              for (var i = 0; i < academy.length; i++) {  
                  List[i] = academy[i].value + "|" + academy[i].text;  
              } 
			  //var arrRes=print_arr(List);console.log(arrRes); console.log(academy); 
              txtSearch.oninput = function() {  
                  
                  if (!(txtSearch.value.length < 1)) {  
                      //查找输入的字符串是否在List中
                      for (var i = 0; i < List.length; i++) {  
					  //indexOf:返回在字符串中首次出现的位置
                          if (List[i].indexOf(txtSearch.value) > -1) {  
                             //如果存在，则将当前option选中
							  academy[i].selected=true;
                          }  
						 
                      }
						
                  }  
              };  
          }  
		   function print_arr(arr, space, space2)
  {
    space = space || '';
    space2 = space2 || '      ';
    var str = "Array\n"+space+"(\n";
    for(var i=0; i<arr.length; i++)
    {
      if( Object.prototype.toString.call(arr[i]) == '[object Array]' )
      { //判断是否是数组，如果是，进行递归拼接
        str += space2 + '[' +i+"] => "+ print_arr(arr[i], space+'      ', space2+'      ');
      }
      else
      {
        str += space2 +'['+i+"] => "+ arr[i] +"\n";
      }
    }
    str += space+")\n";
    return str;
  }
</script>
<div style='position:relative'>
<span style='overflow:hidden'>
学院： <select type="text"  id="academy" class="easyui-combobox" name="state" style="width: 150px; margin-right: 100px;margin-top: 60px"; >
<option value="上海">上海</option>  
            <option value="廊坊">廊坊</option>  
            <option value="北京">北京</option>  
            <option value="广州">广州</option>  
            <option value="深圳">深圳</option>  
</select>
</span>
<input type="text" id="txtSearch" maxlength="50" oninput="check()" style="width:130px;margin-top: 60px;margin-left:225px;position:absolute;left:0px;background-color:transparent" onblur="this.style.backgroundColor='#ffffff'"   />
</div>
</body>
</html>
