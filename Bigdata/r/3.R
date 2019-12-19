# https://m.blog.naver.com/PostView.nhn?blogId=goldenezkang&logNo=220061647790&proxyReferer=https%3A%2F%2Fwww.google.com%2F
# https://dalulu.tistory.com/24

######코드#######
airports <- read.table(file="d:/ko/spark/bigdata_final_enc/turkey.csv", header=TRUE, sep=',')

airports

Turkeys <- map_data("world", region = c("Turkey"))

ggplot() + geom_polygon(Turkeys, mapping=aes(x=long, y=lat, group=group, fill=region), colour="black")+ geom_point(data=airports, aes(x=lon, y=lat), size=3)


+ png(filename="d:/ko/spark/bigdata_final_enc/my.png", height=300, width=300)

dev.off()




world <- map_data("world")

# 원하는 나라를 map_data를 통하여 불러온다

ggplot(asia, aes(x=long, y=lat, group=group, fill=region)) + geom_polygon(colour="black") + scale_fill_brewer(palette="Set1")

ggplot(Turkey, aes(x=long, y=lat, group=group, fill=region)) + geom_polygon(colour="black") + geom_point(data=airport, aes(x=lon, y=lat))

ggplot() + geom_polygon(Turkey, mapping=aes(x=long, y=lat, group=group, fill=region), colour="black") + geom_point(data=airport, aes(x=lon, y=lat), size=3)


ggplot(world, aes(x=long, y=lat, group=group)) + geom_polygon(colour="black")

ggplot(world, aes(x=long, y=lat)) + geom_polygon(colour="black")

# geom_polygon을 이용하여 나라들의 테두리를 그리고 색깔로 채운다

ggplot(Turkey, aes(x=long, y=lat, group=group, fill=region)) + geom_polygon(colour="black") + geom_point(data=airport, aes(x=lon, y=lat) color="grey", alpha=.55, aes(), size=3)
###############


world <- map_data("world")
ggplot(world, aes(x=long, y=lat)) +
  geom_polygon(data=world, aes(x=long, y=lat, group=group), fill="white", color="grey95")

###############

ggplot(world, aes(x=long, y=lat)) +
  geom_polygon(data=world, aes(x=long, y=lat, group=group), fill="white", color="grey95")
+ geom_point(color="grey", alpha=.55, aes(), size=3)
+ geom_point(color="grey", alpha=.75, shape=1, aes(), size=3)


ggplot(world, aes(x=long, y=lat)) +
  
  geom_polygon(data=world, aes(x=long, y=lat, group=group), fill="white", color="grey95") +
  
  geom_point(color="grey", alpha=.55, aes(), size=3) +
  
  geom_point(color="grey", alpha=.75, shape=1, aes(), size=3) +
  
  theme(legend.position = 'none')
######코드#######


korea <- map_data("world", region = c("North Korea", "South Korea"))

ggplot() + geom_polygon(data=korea, aes(x=long, y=lat, group=group, fill=region),colour="black") + scale_fill_brewer(palette="Set1")

# 1번과는 다르게 geom_polygon안에다가 모든 설정값을 집어넣는다.

# 이것은 나중에 더 많은 정보를 보여주기 위해서 꼭 해줘야한다.

# ggplot에다가 모든 설정값을 집어넣으면 나중에쓸수도 있는 geom_point, geom_text를 불러오는데 방해가된다.

###############

######코드#######

data(world.cities)

head(world.cities) # 데이터가 어떻게 생성되어있고 어떤변수들 무엇을 뜻한지 알아봐야한다

skorea.pop <- world.cities[world.cities$country.etc %in% "Korea South",]

skorea.pop <- skorea.pop[order(skorea.pop$pop),]

skorea.pop <- tail(skorea.pop,10)

skorea.pop <- skorea.pop[-10,]

# South Korea에 해당하는 모든 도시들을 skorea.pop에 따로 저장해놓고 서울을 제외한 인구수가 가장많은 9개의 도시들을 골라냈다

nkorea.pop <- world.cities[world.cities$country.etc %in% "Korea North",]

nkorea.pop <- nkorea.pop[order(nkorea.pop$pop),]

nkorea.pop <- tail(nkorea.pop,9)

korea.pop <- rbind(skorea.pop,nkorea.pop)

# South Korea, North Korea의 9개도시들을 하나로 합쳤다

###############

######코드#######


ggplot() + geom_polygon(data=korea, aes(x=long, y=lat, group=group, fill=region),colour="black") + scale_fill_brewer(palette="Set1")+ geom_point(data=korea.pop, aes(x=long, y=lat, size = pop), shape = 16, color = "green", alpha = 0.4)

# alpha는 투명도를 뜻하고, size = pop를 함으로써 크기를 인구수와 비례하게 만들었다.

###############

