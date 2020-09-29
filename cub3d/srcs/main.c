#include "cub3d.h"
#include <stdio.h>

void 	line(void *mlx, void *window, int x, int y, int size)
{
	int i;

	i = 0;
	while(i <= size)
	{
		mlx_pixel_put(mlx, window, x + i, y, 0255255255);
		i++;
	}
}

void 	square(void *mlx, void *window, int x, int y, int size)
{
	int i;

	i= 0;
	while (i <= size)
	{
		mlx_pixel_put(mlx, window, x + i, y, 0777777777);
		mlx_pixel_put(mlx, window, x, y + i, 0777777777);
		mlx_pixel_put(mlx, window, x + size, y + i, 0777777777);
		mlx_pixel_put(mlx, window, x + i, y + size, 0777777777);
		i++;
	}
	
}

void	circle(void *mlx, void *window, int x, int y, int raio)
{
	float	ang;
	float	addang;
	int	new_x;
	int	new_y;

	ang = 0.0;
	addang = 0.01;
	while (ang < 2 * PI)
	{
		new_x = x + (raio * cos(ang));
		new_y = y + (raio * sin(ang));
		mlx_pixel_put(mlx, window,x + new_x,y +  new_y, 0660000);
		ang += addang;
	}
}

int	main(void)
{
	void 	*mlx;
	void 	*window;
	int 	fd;
	char 	*line;
	int	rt;

	mlx = mlx_init();
	window = mlx_new_window(mlx, NUM_COLS, NUM_ROWS, "Janela Janelinha!");
	mlx_string_put(mlx, window, 20,  20, 0500000, "teste");
	//mlx_pixel_put(mlx, window, 300, 300, 0707070);
	//line(mlx, indow, 30, 30, 10000);
	//square(mlx, window, 20, 20, 20);
	//circle(mlx, window, 50, 50, 50);
	fd = open("../map/map0.cub", O_RDONLY);
	rt = get_next_line(fd, &line);
	while (line)
	{
		printf("%s\n", line);
		free(line);
		if (rt <= 0 )
			break;
		rt = get_next_line(fd, &line);
	}
	close(fd);	
	mlx_loop(mlx);

	return (0);
}
