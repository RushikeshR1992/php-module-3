#include<stdio.h>
void main()
{
	int a,b,add,sub,mul,div,mod;
	
	printf("Enter thr two numbers:");
	scanf("%d%d",&a,&b);
	
	add=a+b;
	sub=a-b;
	mul=a*b;
	div=a/b;
	mod=a%b;
	
	printf("add: %d\n sub: %d\n mul: %d\n div: %d\n mod: %d",add,sub,mul,div,mod);
	
}
