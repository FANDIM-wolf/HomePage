;if dx will be equals 3 , we write three numbers into stack
;*( if you wanna change values , change it in *places too)
;M. Elkinson 
mov ax,3
mov bx,3
mov cx,3
div bx
mov cx,0
cmp dx,cx
je M1
jne M5
M1: 
   mov cx,3;*
   push ax
   mov ax,bx
   div cx
   mov cx,0
   cmp dx,cx
   je M2
   jne M5
M2:
   pop ax
   mov cx,3;*
   div cx
   mov cx,0
   cmp dx,cx 
   je M3
   jne M6
M3:
   push ax
   push bx 
   push cx
   hlt   
M5:
  hlt 
M6:
  hlt
   
   
    
   
   
   