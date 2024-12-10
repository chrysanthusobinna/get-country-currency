 
# Country Currency API

Welcome to the **Country Currency API**! This API provides currency-related information for countries worldwide, such as currency name, currency symbol, and currency code. It allows users to query a country and get detailed information about the currency used in that country.

## Project Description

The **Country Currency API** is a RESTful service that allows you to retrieve currency information for any given country. The API returns the following data:

- **Country Name** (e.g., United States)
- **Currency Name** (e.g., US Dollar)
- **Currency Symbol** (e.g., `$`)
- **Currency Code** (e.g., USD)

This API is open-source and welcomes contributions from developers to enhance its features, improve data accuracy, and add support for new currencies.

## How It Works

The API works by allowing users to request currency data for a specific country using a simple GET request. You provide the country name as a parameter, and the API will return the associated currency information.

### Example:

#### Endpoint:
```
GET /country-currency/{country}
```

- **Request Example:**
  ```
  GET /country-currency/United%20States
  ```

- **Response Example:**
  ```json
  {
    "country": "United States",
    "currency_name": "US Dollar",
    "currency_symbol": "$",
    "currency_code": "USD"
  }
  ```

## API Endpoints

### 1. `GET /country-currency/{country}`

#### Description:
Retrieve currency information for a specified country.

#### URL Parameters:
- **country** (string) — The name of the country. Example: `United States`, `India`, `United Kingdom`.

#### Example Request:
```bash
GET /country-currency/India
```

#### Example Response:
```json
{
  "country": "India",
  "currency_name": "Indian Rupee",
  "currency_symbol": "₹",
  "currency_code": "INR"
}
```

### Response Structure:

The API will return a JSON object with the following fields:

- **country**: The name of the country.
- **currency_name**: The full name of the currency used in the country.
- **currency_symbol**: The symbol of the currency (HTML entity).
- **currency_code**: The 3-letter currency code (e.g., USD, INR, EUR).

### Error Handling:
If the country is not found or invalid, the API will return an error message:

#### Example Error Response:
```json
{
  "error": "Country not found"
}
```

## Installation


## How to Contribute

We welcome contributions to the **Country Currency API**! If you would like to contribute, follow these steps:

1. **Fork the repository**: Click on the "Fork" button at the top of the repository to create your own copy of the project.
2. **Clone your fork**: 
   ```bash
   git clone https://github.com/chrysanthusobinna/country-currency-api.git
   ```
3. **Create a new branch**: 
   ```bash
   git checkout -b feature-name
   ```
4. **Make your changes**: Add a new feature or fix a bug.
5. **Commit your changes**:
   ```bash
   git commit -m "Add new feature"
   ```
6. **Push to your fork**:
   ```bash
   git push origin feature-name
   ```
7. **Create a pull request**: Once your changes are pushed, create a pull request to merge your changes into the main repository.

### Reporting Issues
If you encounter any issues with the API, please open a new issue on GitHub, and we will address it as soon as possible.
 