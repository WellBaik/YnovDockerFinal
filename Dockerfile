FROM node:current-slim

COPY ./src/index.js index.js
COPY ./src/package.json package.json

RUN npm install

EXPOSE 8080

CMD [ "node", "index.js" ]
