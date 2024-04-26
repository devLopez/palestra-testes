describe('template spec', () => {
  it('passes', () => {
    cy.visit('http://localhost:8001/register')

    cy.get('[data-cy=name]').type('John Doe')
    cy.get('[data-cy=email]').type('john.doe@example.com')
    cy.get('[data-cy=password]').type('password')
    cy.get('[data-cy=password_confirmation]').type('password')

    cy.get('[data-cy=submit]').click()

    cy.url().should('include', '/dashboard')
  })
})
