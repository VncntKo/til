# https://m.blog.naver.com/PostView.nhn?blogId=goldenezkang&logNo=220061647790&proxyReferer=https%3A%2F%2Fwww.google.com%2F
# https://dalulu.tistory.com/24

######�ڵ�#######
airports <- read.table(file="d:/ko/spark/bigdata_final_enc/turkey.csv", header=TRUE, sep=',')

airports

Turkeys <- map_data("world", region = c("Turkey"))

ggplot() + geom_polygon(Turkeys, mapping=aes(x=long, y=lat, group=group, fill=region), colour="black")+ geom_point(data=airports, aes(x=lon, y=lat), size=3)


+ png(filename="d:/ko/spark/bigdata_final_enc/my.png", height=300, width=300)

dev.off()




world <- map_data("world")

# ���ϴ� ���� map_data�� ���Ͽ� �ҷ��´�

ggplot(asia, aes(x=long, y=lat, group=group, fill=region)) + geom_polygon(colour="black") + scale_fill_brewer(palette="Set1")

ggplot(Turkey, aes(x=long, y=lat, group=group, fill=region)) + geom_polygon(colour="black") + geom_point(data=airport, aes(x=lon, y=lat))

ggplot() + geom_polygon(Turkey, mapping=aes(x=long, y=lat, group=group, fill=region), colour="black") + geom_point(data=airport, aes(x=lon, y=lat), size=3)


ggplot(world, aes(x=long, y=lat, group=group)) + geom_polygon(colour="black")

ggplot(world, aes(x=long, y=lat)) + geom_polygon(colour="black")

# geom_polygon�� �̿��Ͽ� ������� �׵θ��� �׸��� ����� ä���

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
######�ڵ�#######


korea <- map_data("world", region = c("North Korea", "South Korea"))

ggplot() + geom_polygon(data=korea, aes(x=long, y=lat, group=group, fill=region),colour="black") + scale_fill_brewer(palette="Set1")

# 1������ �ٸ��� geom_polygon�ȿ��ٰ� ��� �������� ����ִ´�.

# �̰��� ���߿� �� ���� ������ �����ֱ� ���ؼ� �� ������Ѵ�.

# ggplot���ٰ� ��� �������� ��������� ���߿������� �ִ� geom_point, geom_text�� �ҷ����µ� ���ذ��ȴ�.

###############

######�ڵ�#######

data(world.cities)

head(world.cities) # �����Ͱ� ��� �����Ǿ��ְ� ������� ������ ������ �˾ƺ����Ѵ�

skorea.pop <- world.cities[world.cities$country.etc %in% "Korea South",]

skorea.pop <- skorea.pop[order(skorea.pop$pop),]

skorea.pop <- tail(skorea.pop,10)

skorea.pop <- skorea.pop[-10,]

# South Korea�� �ش��ϴ� ��� ���õ��� skorea.pop�� ���� �����س��� ������ ������ �α����� ���帹�� 9���� ���õ��� ���´�

nkorea.pop <- world.cities[world.cities$country.etc %in% "Korea North",]

nkorea.pop <- nkorea.pop[order(nkorea.pop$pop),]

nkorea.pop <- tail(nkorea.pop,9)

korea.pop <- rbind(skorea.pop,nkorea.pop)

# South Korea, North Korea�� 9�����õ��� �ϳ��� ���ƴ�

###############

######�ڵ�#######


ggplot() + geom_polygon(data=korea, aes(x=long, y=lat, group=group, fill=region),colour="black") + scale_fill_brewer(palette="Set1")+ geom_point(data=korea.pop, aes(x=long, y=lat, size = pop), shape = 16, color = "green", alpha = 0.4)

# alpha�� �������� ���ϰ�, size = pop�� �����ν� ũ�⸦ �α����� ����ϰ� �������.

###############
