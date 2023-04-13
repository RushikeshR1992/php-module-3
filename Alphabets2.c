/*A
  B C
  D E F
  G H I J
  K L N O P
*/
#include<stdio.h>
int main()
{
		char n,i,j,count;
		
		printf("Enter the Number Of the Alphabets");
		scanf("%d",&n);
		
		for(i=1;i<=n;i++)
		{
				for(j=1;j<=i;j++)
				{
						printf("%c",64+count);
						count++;
				}
				printf("\n");
		}
}
