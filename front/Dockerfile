FROM node:current-slim

RUN mkdir /www
WORKDIR /www

COPY ./src/index.js index.js
COPY ./src/package.json package.json
RUN npm install

EXPOSE 8080

CMD [ "node", "index.js" ]
