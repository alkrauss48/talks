import React from 'react';
import { Query } from 'react-apollo';
import gql from 'graphql-tag';

const LibraryQuery = gql`
  {
    items {
      id
      title
      description
      user {
        email
      }
    }
  }
`;

export default () => (
  <Query query={LibraryQuery}>
    {({ data, loading }) => (
      <div>
        {loading
          ? 'loading...'
          : data.items.map(({ description, id, user }) => (
              <div key={id}>
                <b>{description}</b> {user ? `added by ${user.email}` : null}
              </div>
            ))}
      </div>
    )}
  </Query>
);
