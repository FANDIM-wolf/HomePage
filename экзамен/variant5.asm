;if summ of numbers greater than 50 , to count these numbers (find summ)
mov ax,5
mov cx,2
mov bx,3
push ax
push cx
add ax,bx
add ax,cx
mov cx,50
cmp ax,cx
jg  M2
jl  M1
M2:
   pop ax
   pop cx
   add ax,bx
   add ax,cx
   hlt
M1:
  hlt