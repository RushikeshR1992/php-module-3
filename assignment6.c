/*A
  A B
  A B C
  A B C D
  A B C D E */
#include<stdio.h>
int main()
{
		char i,j,n;
		
		printf("Enter the Numbers");
		scanf("%d",&n);
		for(i=1;i<=n;i++)
		{
				for(j=1;j<=i;j++)//j=4;j>=i;j--
				{
						printf("%c",64+j);
				}
				printf("\n");
		}
		
}
