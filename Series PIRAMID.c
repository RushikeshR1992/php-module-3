/*
		*
	   * *
	  * * * 
	 * * * *
	* * * * *   	
*/



#include<stdio.h>
int main()
{
		int i,j,k,n;
		printf("Enter the Numbers:");
		scanf("%d",&n);
		for(i=1;i<=n;i++)
		{
				for(j=i;j<=2*n;j++)
				{
						printf(" ");
				}
				for(k=1;k<=i;k++)
				{
					printf("*");
				}
				printf("\n");
		}
}
