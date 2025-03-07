FROM node:18.7-alpine AS build

WORKDIR /usr/src/app
COPY package.json package-lock.json ./
RUN apk add --upgrade python3 build-base \
 && npm install
COPY . .
RUN npm run build

FROM caddy
ENV PORT 8080

COPY Caddyfile /etc/caddy/Caddyfile
COPY --from=build /usr/src/app/dist /srv
COPY assets/YAML/generated/generated.yaml /srv/assets/YAML/generated/generated.yaml
