#include<stdio.h>
int main()
{
		int p,t,r;
		float si;
		
		printf("Enter the prinicipal Amount:");
		scanf("%d",&p);
		
		printf("Enter the time:");
		scanf("%d",&t);
		
		printf("Enter the rate:");
		scanf("%d",&r);
		
		si=p*t*r/100;

		printf("Simple Intrest=%.2lf",si);
		
		return 0;
				
}
