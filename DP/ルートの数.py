def getRoutes(row,col):
    DP = [[0]*col for _ in range(row)]

    DP[0][0] = 1

    for i in range(row):
        for j in range(col):
            if j - 1 >= 0:
                DP[i][j] += DP[i][j-1]
            if i - 1 >= 0:
                DP[i][j] += DP[i-1][j]
    return DP[-1][-1]